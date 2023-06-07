<?php

namespace App\Http\Controllers;

use App\Models\CartaoConvenio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CartaoConvenioController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;

        $convenio = CartaoConvenio::where('id_user', $userId)->get();

        // dd($convenio);

        return view(
            'profile.cartaoConvenio',
            compact(
                'convenio'
            )
        );
    }

    public function store(Request $request)
    {
        $cartaoConvenio = new CartaoConvenio();

        $cartaoConvenio->id_user = $request->id_user;
        $cartaoConvenio->numero = $request->input('numConvenio');
        $cartaoConvenio->nomeConvenio = $request->input('nomeConvenio');
        $cartaoConvenio->plano = $request->input('plano');

        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/carteirinha_convenio', $fileName);
            $cartaoConvenio->nome_arquivo = $fileName;
        }


        $user = auth()->user();
        $cartaoConvenio->id_user = $user->id;

        $cartaoConvenio->save();

        return redirect()->route('meuConvenio');
    }


    public function update(Request $request, $id)
    {
        $cartaoConvenio = CartaoConvenio::FindOrFail($id);

        $cartaoConvenio->id_user = $request->id_user;
        $cartaoConvenio->numero = $request->input('numConvenio');
        $cartaoConvenio->nomeConvenio = $request->input('nomeConvenio');
        $cartaoConvenio->plano = $request->input('plano');

        if ($request->hasFile('arquivo')) {
            if (Storage::exists('public/carteirinha_convenio/' . $cartaoConvenio->nome_arquivo)) {
                Storage::delete('public/carteirinha_convenio/' . $cartaoConvenio->nome_arquivo);
            }

            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/carteirinha_convenio', $fileName);
            $cartaoConvenio->nome_arquivo = $fileName;
        }

        $user = auth()->user();
        $cartaoConvenio->id_user = $user->id;

        $cartaoConvenio->save();

        return redirect()->route('meuConvenio');
    }
}