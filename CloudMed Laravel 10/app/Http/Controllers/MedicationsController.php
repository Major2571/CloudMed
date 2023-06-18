<?php

namespace App\Http\Controllers;

use App\Models\Medications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get the authenticated user's ID
        $userId = Auth::user()->id;

        // Get the filter value for medication name
        $filterMedicationName = $request->filterMedicationName;

        // Query the medications for the user
        $medications = Medications::where('id_user', $userId);

        // Apply the filter if medication name is provided
        if ($filterMedicationName) {
            $medications->where('medication_name', 'like', '%' . $filterMedicationName . '%');
        }

        // Retrieve the medications
        $medications = $medications->get();

        return view('user.medications.indexMedications', compact(
            'medications',
            'filterMedicationName'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.medications.createMedications');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medication = new Medications();

        // Get the authenticated user
        $user = auth()->user();
        $medication->id_user = $user->id;

        // Set the medication details from the form input
        $medication->medication_name = $request->medicamento;
        $medication->dosage = $request->dosage;
        $medication->laboratory = $request->laboratory;
        $medication->frequency = $request->frequency;
        $medication->treatment = $request->treatment;
        $medication->observations = $request->observations;

        // Save the medication
        $medication->save();

        return redirect()->route('myMedications');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medications $medications, $id)
    {
        // Find the medication by ID
        $medications = Medications::findOrFail($id);

        return view('user.medications.editMedications', compact(
            'medications'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the medication by ID
        $medication = Medications::findOrFail($id);

        // Get the authenticated user
        $user = auth()->user();
        $medication->id_user = $user->id;

        // Update the medication details from the form input
        $medication->medication_name = $request->medicamento;
        $medication->dosage = $request->dosage;
        $medication->laboratory = $request->laboratory;
        $medication->frequency = $request->frequency;
        $medication->treatment = $request->treatment;
        $medication->observations = $request->observations;

        // Save the updated medication
        $medication->save();

        return redirect()->route('myMedications');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medications $medications, $id)
    {
        // Find the medication by ID and delete it
        Medications::where('id', $id)->delete();

        return redirect()->route('myMedications');
    }
}
