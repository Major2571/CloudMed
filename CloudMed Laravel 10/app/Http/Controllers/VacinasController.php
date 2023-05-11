<?php

namespace App\Http\Controllers;

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
        $filtroNome = $request->input('filtroNome');
        $filtroTipoDose = $request->input('filtroTipoDose');
    
        $query = Vacinas::where('id_user', Auth::user()->id);
    
        if ($filtroNome) {
            $query->where('titulo', 'LIKE', '%' . $filtroNome . '%');
        }
    
        if ($filtroTipoDose) {
            $query->where('tipoDose', $filtroTipoDose);
        }
    
        $vacinas = $query->get();
    
        return view('minhasVacinas', compact('vacinas', 'filtroNome', 'filtroTipoDose'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoCadVacina');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vacina = new Vacinas;

        $vacina->id_user = $request->id_user;
        $vacina->titulo = $request->input('name');
        $vacina->tipoDose = $request->input('tipoDose');
        $vacina->data = $request->input('date');
        $vacina->fabricante = $request->input('local');
        $vacina->cidade = $request->input('cidade');
        $vacina->UF = $request->input('uf');

        $user = auth()->user();
        $vacina->id_user = $user->id;

        $vacina->save();

        return redirect('/minhas-vacinas');
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
    public function edit(Vacinas $vacinas,)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacinas $vacinas)
    {
        //;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacinas $vacinas, $id)
    {
        $vacinas = new Vacinas();
        $vacinas->where('id', $id)->delete();
        return redirect('/minhas-vacinas');
    }
}
