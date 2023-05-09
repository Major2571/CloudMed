<?php

namespace App\Http\Controllers;

use App\Models\UserPacientes;
use Illuminate\Http\Request;

class UserPacientesController extends Controller
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
            $userPacientes = new UserPacientes();

            $userPacientes->id_user = $request->id_user;
            $userPacientes->tidInformacoesClinicas = $request->idInformacoesClinicas;
            $userPacientes->idCartaoSus = $request->idCartaoSus;
            $userPacientes->sobrenome = $request->input('name');
            $userPacientes->dataNascimento = $request->input('date');
            $userPacientes->rg = $request->input('rg');
            $userPacientes->cpf = $request->input('cpf');
            $userPacientes->cidade = $request->input('cidade');
            $userPacientes->uf = $request->input('uf');
            $userPacientes->email = $request->input('email');
            $userPacientes->telefone = $request->input('number');
        
            $userPacientes->save();

            return redirect('/welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserPacientes $userPacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserPacientes $userPacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserPacientes $userPacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserPacientes $userPacientes)
    {
        //
    }
}
