<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
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
            $UserDetails = new UserDetails();

            $UserDetails->id_user = $request->id_user;
            $UserDetails->tidInformacoesClinicas = $request->idInformacoesClinicas;
            $UserDetails->idCartaoSus = $request->idCartaoSus;
            $UserDetails->sobrenome = $request->input('name');
            $UserDetails->dataNascimento = $request->input('date');
            $UserDetails->rg = $request->input('rg');
            $UserDetails->cpf = $request->input('cpf');
            $UserDetails->cidade = $request->input('cidade');
            $UserDetails->uf = $request->input('uf');
            $UserDetails->email = $request->input('email');
            $UserDetails->telefone = $request->input('number');
        
            $UserDetails->save();

            return redirect('/welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetails $UserDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDetails $UserDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserDetails $UserDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetails $UserDetails)
    {
        //
    }
}
