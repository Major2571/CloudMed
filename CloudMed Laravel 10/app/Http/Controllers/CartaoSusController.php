<?php

namespace App\Http\Controllers;

use App\Models\CartaoSus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CartaoSusController extends Controller
{

    public function store(Request $request)
    {
        $cartaoSus = new CartaoSus();

        $cartaoSus->id_user = $request->id_user;

        $user = auth()->user();
        $cartaoSus->id_user = $user->id;
        $cartaoSus->numero = $request->input('numero');

        if ($request->hasFile('arquivoSus')) {
            $file = $request->file('arquivoSus');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/carteirinha_sus', $fileName);
            $cartaoSus->nome_arquivo = $fileName;
        };

        $cartaoSus->save();

        return redirect()->route('userDetailsMedical');
    }

    public function update(Request $request, $id)
    {
        $cartaoSus = CartaoSus::FindOrFail($id);

        $cartaoSus->id_user = $request->id_user;

        $user = auth()->user();
        $cartaoSus->id_user = $user->id;
        $cartaoSus->numero = $request->input('numero');

        if ($request->hasFile('arquivoSus')) {
            if (Storage::exists('public/carteirinha_convenio/' . $cartaoSus->nome_arquivo)) {
                Storage::delete('public/carteirinha_convenio/' . $cartaoSus->nome_arquivo);
            }

            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/carteirinha_convenio', $fileName);
            $cartaoSus->nome_arquivo = $fileName;
        }

        $cartaoSus->save();

        return redirect()->route('userDetailsMedical');
    }
}
