<?php

namespace App\Http\Controllers;

use App\Models\Exames;
use App\Models\Especialidade;
use App\Models\UFs;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Event;

class ExamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $especialidades = Especialidade::all();

        $userId = Auth::user()->id;
        $exames = Exames::where('id_user', $userId);

        $filtroData = $request->input('filtroData');
        if ($filtroData) {
            $exames->whereDate('data', $filtroData);
        }

        $filtroEspecialidade = $request->input('filtroEspecialidade');
        if ($filtroEspecialidade) {
            $exames->where('id', $filtroEspecialidade);
        }

        $exames = $exames->get();

        return view('meusExames', compact('exames', 'filtroData', 'filtroEspecialidade', 'especialidades'));
    }


    public function create()
    {
        $especialidades = Especialidade::all();
        $uf = UFs::all();

        return view('novoCadExame', compact('especialidades', 'uf'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exames = new Exames();

        $exames->id_user = $request->id_user;
        $exames->id_especialidade = $request->input('especialidade');
        $exames->id_uf = $request->input('uf');
        $exames->titulo = $request->input('name');
        $exames->data = $request->input('date');
        $exames->instituicao = $request->input('local');
        $exames->cidade = $request->input('cidade');

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
        $exame = Exames::find($id);

        return view('/meus-exames', compact('exame'));
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
        $exames->where('id', $id)->delete();
        return redirect('/meus-exames');
    }

    public function dashboard()
    {
        $user = auth()->user();

        $exames = $user->exames;

        return view('welcome', compact('exames'));
    }
}
