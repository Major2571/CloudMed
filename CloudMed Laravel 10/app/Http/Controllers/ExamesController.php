<?php

namespace App\Http\Controllers;

use App\Models\Exames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exames = Exames::all();
        //dd($exames);

        return view('exames.index')-> with('exames', $exames);
    
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exames.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
            $exames = new Exames();

            $exames->titulo = $request->input('Titulo');
            $exames->especialidade = $request->input('Especialidade');
            $exames->data = $request->input('Data') ;
            $exames->instituicao = $request->input('Instituicao');
            $exames->cidade = $request->input('Cidade');
            $exames->uf = $request->input('UF');
        
            $exames->save();

            return redirect('/meus-exames');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exames $exames, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exames $exames)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exames $exames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exames $exames)
    {
        //
    }
}
