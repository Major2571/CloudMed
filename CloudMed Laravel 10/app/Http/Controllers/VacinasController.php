<?php

namespace App\Http\Controllers;

use App\Models\Vacinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VacinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacinas = Vacinas::all();

        return view('vacinas.index')-> with('vacinas', $vacinas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacinas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $vacina = new Vacinas;

            $vacina->titulo = $request->input('titulo');
            $vacina->tipoDose = $request->input('tipoDose');
            $vacina->data = $request->input('data');
            $vacina->fabricante = $request->input('fabricante');
            $vacina->cidade = $request->input('cidade');
            $vacina->UF = $request->input('UF');
        

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
    public function edit(Vacinas $vacinas, )
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
        //
    }
}
