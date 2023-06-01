<?php

namespace App\Http\Controllers;

use App\Models\CartaoSus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CartaoSusController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $sus = CartaoSus::where('id_user', $userId)->get();

        return view('profile.cartaoSus', compact(
            'sus'
        ));
    }

    public function store(Request $request)
    {
        $cartaoSus = new CartaoSus();

        $cartaoSus->id_user = $request->id_user;

        $user = auth()->user();
        $cartaoSus->id_user = $user->id;
        $cartaoSus->numero = $request->input('numero');

        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/carteirinha_sus', $fileName);
            $cartaoSus->nome_arquivo = $fileName;
        };

        $cartaoSus->save();

        return redirect()->route('meuSus');
    }

    public function update(Request $request, $id)
    {
        $cartaoSus = CartaoSus::FindOrFail($id);

        // $cartaoSus->id_user = $request->id_user;
        
        $user = auth()->user();
        $cartaoSus->id_user = $user->id;
        $cartaoSus->numero = $request->input('numero');

        if ($request->hasFile('arquivo')) {
            if (Storage::exists('public/carteirinha_convenio/' . $cartaoSus->nome_arquivo)) {
                Storage::delete('public/carteirinha_convenio/' . $cartaoSus->nome_arquivo);
            }

            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/carteirinha_convenio', $fileName);
            $cartaoSus->nome_arquivo = $fileName;
        }

        $cartaoSus->save();

        return redirect()->route('meuSus');
    }
}
