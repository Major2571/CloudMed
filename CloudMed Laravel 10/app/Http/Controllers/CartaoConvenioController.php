<?php

namespace App\Http\Controllers;

use App\Models\CartaoConvenio;
use Illuminate\Http\Request;

class CartaoConvenioController extends Controller
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
            $cartaoConvenio = new CartaoConvenio();
                   
            $cartaoConvenio->idCartaoConvenio = $request->idCartaoConvenio;
            $cartaoConvenio->id_user = $request->id_user;
            $cartaoConvenio->numero = $request->input('numConvenio');
            $cartaoConvenio->nomeConvenio = $request->input('nomeConvenio');
            $cartaoConvenio->validade = $request->validade;
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(CartaoConvenio $cartaoConvenio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartaoConvenio $cartaoConvenio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartaoConvenio $cartaoConvenio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartaoConvenio $cartaoConvenio)
    {
        //
    }
}
