<?php

namespace App\Http\Controllers;

use App\Models\InformacoesClinicas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InformacoesClinicasController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $infoClinica = InformacoesClinicas::where('id_user', $userId)->get();

        return view(
            'profile.infoClinicas',
            compact(
                'infoClinica',
            )
        );
    }

    public function store(Request $request)
    {
        $infoClinica = new InformacoesClinicas();

        $infoClinica->id_user = $request->id_user;
        $infoClinica->tipoSanguineo = $request->input('tipoSanguineo');
        $infoClinica->doador = $request->input('doador');
        $infoClinica->altura = $request->input('altura');
        $infoClinica->peso = $request->input('peso');
        $infoClinica->alergias = $request->input('alergias');

        $user = auth()->user();
        $infoClinica->id_user = $user->id;

        $infoClinica->save();

        return redirect()->route('infoClinicas');

    }

    public function update(Request $request, $id)
    {
        $infoClinica = InformacoesClinicas::FindOrFail($id);

        $infoClinica->id_user = $request->id_user;
        $infoClinica->tipoSanguineo = $request->input('tipoSanguineo');
        $infoClinica->doador = $request->input('doador');
        $infoClinica->altura = $request->input('altura');
        $infoClinica->peso = $request->input('peso');
        $infoClinica->alergias = $request->input('alergias');

        $user = auth()->user();
        $infoClinica->id_user = $user->id;

        $infoClinica->save();

        return redirect()->route('infoClinicas');
    }

}