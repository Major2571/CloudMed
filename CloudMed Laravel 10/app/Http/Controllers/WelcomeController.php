<?php

namespace App\Http\Controllers;

use App\Models\Exames;
use App\Models\Vacinas;

use App\Models\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exames = Exames::all();
        $vacinas = Vacinas::all();

        $ultimoExame = Exames::latest()->first();
        $totalExames = Exames::count();

        $ultimaVacina = Vacinas::latest()->first();
        $totalVacinas = Vacinas::count();
        
        $isInstituicao = !!$ultimoExame->instituicao;
        $isFabricante = !!$ultimaVacina->fabricante;

        return view('welcome', compact( 'exames', 
                                        'vacinas', 
                                        'ultimoExame', 
                                        'totalExames',
                                        'isInstituicao',
                                        'isFabricante',
                                        'ultimaVacina',
                                        'totalVacinas',
                                    ));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
