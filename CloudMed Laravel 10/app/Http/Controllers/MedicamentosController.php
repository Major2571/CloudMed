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
        $medicamentos = Medicamentos::where('id_user', $userId)->get();

        // dd($medicamentos);

        return view('meusMedicamentos', compact(
            'medicamentos',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoCadMedicamentos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medicamento = New Medicamentos();
        
        $user = auth()->user();

        $medicamento->id_user = $user->id;
        $medicamento->nome_medicamento = $request->input('medicamento');
        $medicamento->dosagem = $request->input('dosagem');
        $medicamento->laboratorio = $request->input('laboratorio');
        $medicamento->frequencia = $request->input('frequencia');
        $medicamento->tratamento = $request->input('tratamento');
        $medicamento->observacoes = $request->input('observacoes');
        
        $medicamento->save();

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
    public function edit(Medicamentos $medicamentos, $id)
    {
        $medicamentos = Medicamentos::FindOrFail($id);

        return view('editMedicamentos', compact('medicamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $medicamento = Medicamentos::FindOrFail($id);
        
        $user = auth()->user();

        $medicamento->id_user = $user->id;
        $medicamento->nome_medicamento = $request->input('medicamento');
        $medicamento->dosagem = $request->input('dosagem');
        $medicamento->laboratorio = $request->input('laboratorio');
        $medicamento->frequencia = $request->input('frequencia');
        $medicamento->tratamento = $request->input('tratamento');
        $medicamento->observacoes = $request->input('observacoes');
        
        $medicamento->save();

        return redirect()->route('meusMedicamentos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicamentos $medicamentos, $id)
    {
        $medicamentos = new Medicamentos();
        $medicamentos->where('id', $id)->delete();
        return redirect()->route('meusMedicamentos');
    }
}
