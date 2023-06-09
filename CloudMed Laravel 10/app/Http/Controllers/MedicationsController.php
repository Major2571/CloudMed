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
        // $userId = Auth::user()->id;
        // $medications = Medications::where('id_user', $userId)->get();

        $filterMedicationName = $request->input('filterMedicationName');

        $filterMedicamentionNameResult = Medications::where('id_user', Auth::user()->id);

        if ($filterMedicationName) {
            $filterMedicamentionNameResult->where('medication_name', 'like', '%' . $filterMedicationName . '%');
        }

        $medications = $filterMedicamentionNameResult->get();

        // dd($medications);

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
        $medication = New Medications();
        
        $user = auth()->user();

        $medication->id_user = $user->id;
        $medication->medication_name = $request->input('medicamento');
        $medication->dosage = $request->input('dosage');
        $medication->laboratory = $request->input('laboratory');
        $medication->frequency = $request->input('frequency');
        $medication->treatment = $request->input('treatment');
        $medication->observations = $request->input('observations');
        
        $medication->save();

        return redirect()->route('myMedications');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medications $medications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medications $medications, $id)
    {
        $medications = Medications::FindOrFail($id);

        return view('user.medications.editMedications', compact(
            'medications'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $medication = Medications::FindOrFail($id);
        
        $user = auth()->user();

        $medication->id_user = $user->id;
        $medication->medication_name = $request->input('medicamento');
        $medication->dosage = $request->input('dosage');
        $medication->laboratory = $request->input('laboratory');
        $medication->frequency = $request->input('frequency');
        $medication->treatment = $request->input('treatment');
        $medication->observations = $request->input('observations');
        
        $medication->save();

        return redirect()->route('myMedications');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medications $medications, $id)
    {
        $medications = new Medications();
        $medications->where('id', $id)->delete();
        return redirect()->route('myMedications');
    }
}
