<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use App\Models\MedicalSpecialty;
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
        $medical_specialtys = MedicalSpecialty::all();

        // Get the current user's ID
        $userId = Auth::user()->id;

        // Create a base query to retrieve exams for the current user
        $exam = Exams::where('id_user', $userId);

        // Apply filters to the query if provided
        $filterExamDate = $request->input('filterExamDate');
        if ($filterExamDate) {
            $exam->whereDate('data', $filterExamDate);
        }

        $filterMedicalSpecialty = $request->input('filterMedicalSpecialty');
        if ($filterMedicalSpecialty) {
            $exam->where('id', $filterMedicalSpecialty);
        }

        // Execute the query and retrieve the filtered exams
        $exam = $exam->get();

        // Return the 'user.exams.indexExams' view, passing the variables as compact
        return view(
            'user.exams.indexExams',
            compact(
                'exam',
                'filterExamDate',
                'filterMedicalSpecialty',
                'medical_specialtys'
            )
        );
    }


    public function create()
    {
        // Retrieve all specialties and UFs from the database
        $medical_specialtys = MedicalSpecialty::all();
        $uf = UFs::all();

        // Return the 'user.exams.createExams' view, passing the variables as compact
        return view(
            'user.exams.createExams',
            compact(
                'medical_specialtys',
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
        $exams->id_medical_specialty = $request->input('medical_specialty');
        $exams->id_uf = $request->input('uf');
        $exams->exam_title = $request->input('name');
        $exams->exam_date = $request->input('exam_date');
        $exams->institution = $request->input('local');
        $exams->city = $request->input('city');

        // Save the Files
        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/exam_files', $fileName);
            $exams->file_exam_name = $fileName;
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
        $exam = Exams::findOrFail($id);

        // Retrieve all MedicalSpecialty and UFs models
        $medical_specialtys = MedicalSpecialty::all();
        $uf = UFs::all();

        // Return the 'edit' view, passing the necessary data as compact variables
        return view(
            'user.exams.editExams',
            compact(
                'exam',
                'medical_specialtys',
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
        $exam->id_medical_specialty = $request->input('medical_specialty');
        $exam->id_uf = $request->input('uf');
        $exam->exam_title = $request->input('name');
        $exam->exam_date = $request->input('exam_date');
        $exam->institution = $request->input('local');
        $exam->city = $request->input('city');

        // Replace the file if a new file is uploaded
        if ($request->hasFile('arquivo')) {
            // Check if the file exists and delete it
            if (Storage::exists('public/exam_files/' . $exam->file_exam_name)) {
                Storage::delete('public/exam_files/' . $exam->file_exam_name);
            }

            // Save the new file
            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/exam_files', $fileName);

            $exam->file_exam_name = $fileName;
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