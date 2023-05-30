<?php

namespace App\Http\Controllers;

use App\Models\Medicamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $medicamentos = Medicamentos::where('id_user', $userId);

        return view('meusMedicamentos', compact(
            'medicamentos',
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
        return redirect()->route('meusMedicamentos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicamentos $medicamentos)
    {
        return redirect()->route('meusMedicamentos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicamentos $medicamentos)
    {
        return redirect()->route('meusMedicamentos');
    }
}
