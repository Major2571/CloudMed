<?php

namespace App\Http\Controllers;

use App\Models\PacienteInformacoesClinicas;
use Illuminate\Http\Request;

class PacienteInformacoesClinicasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pacienteInformacoesClinicas = new PacienteInformacoesClinicas();
                   
        $pacienteInformacoesClinicas->idInformacoesClinicas = $request->idInformacoesClinicas;
        $pacienteInformacoesClinicas->altura = $request->altura;
        $pacienteInformacoesClinicas->peso = $request->peso; 
        $pacienteInformacoesClinicas->tipoSanguineo = $request->tipo;
        $pacienteInformacoesClinicas->alergias = $request->alergias;
        $pacienteInformacoesClinicas->medicamentosUsoContinuo = $request->medicamentosUsoContinuo;

    }

    /**
     * Display the specified resource.
     */
    public function show(PacienteInformacoesClinicas $pacienteInformacoesClinicas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PacienteInformacoesClinicas $pacienteInformacoesClinicas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PacienteInformacoesClinicas $pacienteInformacoesClinicas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PacienteInformacoesClinicas $pacienteInformacoesClinicas)
    {
        //
    }
}
