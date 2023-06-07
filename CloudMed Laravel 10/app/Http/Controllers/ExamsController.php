<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use App\Models\Especialidade;
use App\Models\UFs;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Storage;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Retrieve all specialties
        $especialidades = Especialidade::all();

        // Get the current user's ID
        $userId = Auth::user()->id;

        // Create a base query to retrieve exams for the current user
        $exames = Exams::where('id_user', $userId);

        // Apply filters to the query if provided
        $filtroData = $request->input('filtroData');
        if ($filtroData) {
            $exames->whereDate('data', $filtroData);
        }

        $filtroEspecialidade = $request->input('filtroEspecialidade');
        if ($filtroEspecialidade) {
            $exames->where('id', $filtroEspecialidade);
        }

        // Execute the query and retrieve the filtered exams
        $exames = $exames->get();

        // Return the 'user.exams.indexExams' view, passing the variables as compact
        return view(
            'user.exams.indexExams',
            compact(
                'exames',
                'filtroData',
                'filtroEspecialidade',
                'especialidades'
            )
        );
    }


    public function create()
    {
        // Retrieve all specialties and UFs from the database
        $especialidades = Especialidade::all();
        $uf = UFs::all();

        // Return the 'user.exams.createExams' view, passing the variables as compact
        return view(
            'user.exams.createExams',
            compact(
                'especialidades',
                'uf'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new instance of Exames model
        $exams = new Exams();

        // Assign values from the request inputs to the model attributes
        $exams->id_especialidade = $request->input('especialidade');
        $exams->id_uf = $request->input('uf');
        $exams->titulo = $request->input('name');
        $exams->data = $request->input('date');
        $exams->instituicao = $request->input('local');
        $exams->cidade = $request->input('cidade');

        // Save the Files
        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/arquivos_exames', $fileName);
            $exams->nome_arquivo = $fileName;
        }

        // Assign the current user's ID to the model
        $user = auth()->user();
        $exams->id_user = $user->id;

        // Save the model to the database
        $exams->save();

        // Redirect the user to the 'myExams' route
        return redirect()->route('myExams');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exams $exams, $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exams $exams, $id)
    {
        // Find the Exames model with the specified ID or throw an exception if not found
        $exame = Exams::findOrFail($id);

        // Retrieve all Especialidade and UFs models
        $especialidades = Especialidade::all();
        $uf = UFs::all();

        // Return the 'edit' view, passing the necessary data as compact variables
        return view(
            'user.exams.editExams',
            compact(
                'exame',
                'especialidades',
                'uf'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the Exames model with the specified ID or throw an exception if not found
        $exam = Exams::FindOrFail($id);

        // Update the Exames model with the input values
        $exam->id_especialidade = $request->input('especialidade');
        $exam->id_uf = $request->input('uf');
        $exam->titulo = $request->input('name');
        $exam->data = $request->input('date');
        $exam->instituicao = $request->input('local');
        $exam->cidade = $request->input('cidade');

        // Replace the file if a new file is uploaded
        if ($request->hasFile('arquivo')) {
            // Check if the file exists and delete it
            if (Storage::exists('public/arquivos_exames/' . $exam->nome_arquivo)) {
                Storage::delete('public/arquivos_exames/' . $exam->nome_arquivo);
            }

            // Save the new file
            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/arquivos_exames', $fileName);

            $exam->nome_arquivo = $fileName;
        }

        // Save the updated Exames model
        $exam->save();

        // Redirect to the 'myExams' route
        return redirect()->route('myExams');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exams $exams, $id)
    {
        // Find the exam by its ID or throw an exception if not found and Delete the exam from the database
        Exams::FindOrFail($id)->delete();

        // Redirect the user to the "myExams" route
        return redirect()->route('myExams');
    }
}