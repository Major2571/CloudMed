<?php

namespace App\Http\Controllers;

use App\Models\NomeVacinas;
use App\Models\UFs;
use App\Models\Vacinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VacinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nomeVacinas = NomeVacinas::all();

        $filtroNome = $request->input('filtroNome');
        $filtroTipoDose = $request->input('filtroTipoDose');

        $query = Vacinas::where('id_user', Auth::user()->id);

        if ($filtroNome) {
            $query->where('id_vacina', $filtroNome);
        }

        if ($filtroTipoDose) {
            $query->where('tipoDose', $filtroTipoDose);
        }

        $vacinas = $query->get();

        return view('vaccines.minhasVacinas', compact(
            'vacinas',
            'filtroNome',
            'filtroTipoDose',
            'nomeVacinas'
        )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nomeVacinas = NomeVacinas::all();
        $uf = UFs::all();

        return view('vaccines.novoCadVacina', compact(
            'uf',
            'nomeVacinas'
        )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vacina = new Vacinas;

        $vacina->id_user = $request->id_user;
        $vacina->id_vacina = $request->input('name');
        $vacina->id_uf = $request->input('uf');
        $vacina->titulo = $request->input('newNomeVacina');
        $vacina->tipoDose = $request->input('tipoDose');
        $vacina->data = $request->input('date');
        $vacina->fabricante = $request->input('fabricante');
        $vacina->lote = $request->input('lote');
        $vacina->cidade = $request->input('cidade');

        $user = auth()->user();
        $vacina->id_user = $user->id;

        $vacina->save();

        return redirect()->route('minhasVacinas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacinas $vacinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacinas $vacinas, $id)
    {
        $vacina = Vacinas::FindOrFail($id);
        $nomeVacinas = NomeVacinas::all();
        $uf = UFs::all();

        return view('vaccines.editVacina', compact(
            'vacina',
            'uf',
            'nomeVacinas'
        )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vacina = Vacinas::FindOrFail($id);

        $vacina->id_user = $request->id_user;
        $vacina->id_vacina = $request->input('name');
        $vacina->id_uf = $request->input('uf');
        $vacina->titulo = $request->input('newNomeVacina');
        $vacina->tipoDose = $request->input('tipoDose');
        $vacina->data = $request->input('date');
        $vacina->fabricante = $request->input('fabricante');
        $vacina->lote = $request->input('lote');
        $vacina->cidade = $request->input('cidade');

        $user = auth()->user();
        $vacina->id_user = $user->id;

        $vacina->save();

        return redirect()->route('minhasVacinas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacinas $vacinas, $id)
    {
        $vacinas = new Vacinas();
        $vacinas->where('id', $id)->delete();
        return redirect()->route('minhasVacinas');
    }
}