<?php

namespace App\Http\Controllers;

use App\Models\InformacoesClinicas;
use Illuminate\Http\Request;

class InformacoesClinicasController extends Controller
{

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

        return redirect()->route('userDetailsMedical');

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

        return redirect()->route('userDetailsMedical');
    }

}
