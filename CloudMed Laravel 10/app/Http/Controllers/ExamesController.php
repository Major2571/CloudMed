<?php

namespace App\Http\Controllers;

use App\Models\Exames;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Console\Scheduling\Event;

class ExamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exames = Exames::all();
        //dd($exames);

        return view('meusExames', compact('exames'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meusExames');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
            $exames = new Exames();

            $exames->id_user = $request->id_user;
            $exames->titulo = $request->input('name');
            $exames->especialidade = $request->input('especialidade');
            $exames->data = $request->input('date');
            
            $exames->instituicao = $request->input('local');
            $exames->cidade = $request->input('cidade');
            $exames->uf = $request->input('uf');
        
            $user = auth()->user();
            $exames->id_user = $user->id;

            $exames->save();

            return redirect('/meus-exames');

    }

    /**
     * Display the specified resource.
     */
    public function show(Exames $exames, $id)
    {
        $exames = Exames::findOrFail($id);
        
        // $examesOwner = User::where('id, $exames->id_user')->first()->toArray(); 

        return view('meusExames', compact('exames'));

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
    public function destroy($id)
    {
        $exames = new Exames();
        $exames->where( 'id', $id )->delete();
        return redirect('/meus-exames');
    }

    public function dashboard( ) {
        $user = auth()->user();
        
        $exames = $user->exames;

        return view('welcome', compact('exames'));
    }
}