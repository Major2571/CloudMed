<?php

namespace App\Http\Controllers;

use App\Models\CartaoSus;
use Illuminate\Http\Request;

class CartaoSusController extends Controller
{

    public function store(Request $request)
    {
        $cartaoSus = new CartaoSus();

        $cartaoSus->id_user = $request->id_user;

        $user = auth()->user();
        $cartaoSus->id_user = $user->id;

        $cartaoSus->save();

        return redirect()->route('userDetailsMedical');
    }

    public function update(Request $request, CartaoSus $cartaoSus)
    {
        //
    }
}
