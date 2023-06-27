<?php

namespace App\Http\Controllers;

use App\Models\CardSUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CardSUSController extends Controller
{
    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::user()->id;

        // Retrieve the CardSUS records for the user
        $sus = CardSUS::where('id_user', $userId)->get();

        return view(
            'profile.cartaoSus',
            compact('sus')
        );
    }

    public function store(Request $request)
    {
        $cardSUS = new CardSUS();

        // Get the authenticated user
        $user = auth()->user();
        $cardSUS->id_user = $user->id;

        // Set the cardSUS number from the form input
        $cardSUS->number_cardSUS = $request->number_cardSUS;

        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/health_card/card_sus_file', $fileName);
            $cardSUS->file_cardSUS_name = $fileName;
        }

        // Save the cardSUS record
        $cardSUS->save();

        return redirect()->route('meuSus');
    }

    public function update(Request $request, $id)
    {
        $cardSUS = CardSUS::findOrFail($id);

        // Get the authenticated user
        $user = auth()->user();
        $cardSUS->id_user = $user->id;

        // Set the cardSUS number from the form input
        $cardSUS->number_cardSUS = $request->number_cardSUS;

        if ($request->hasFile('arquivo')) {
            if (Storage::exists('public/health_card/card_sus_file/' . $cardSUS->file_cardSUS_name)) {
                Storage::delete('public/health_card/card_sus_file/' . $cardSUS->file_cardSUS_name);
            }

            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/health_card/card_sus_file', $fileName);
            $cardSUS->file_cardSUS_name = $fileName;
        }

        // Save the updated cardSUS record
        $cardSUS->save();

        return redirect()->route('meuSus');
    }
}
