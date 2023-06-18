<?php

namespace App\Http\Controllers;

use App\Models\ClinicalInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClinicalInformationController extends Controller
{
    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::user()->id;

        // Retrieve the ClinicalInformation records for the user
        $clinicalInfo = ClinicalInformation::where('id_user', $userId)->get();

        return view(
            'profile.infoClinicas',
            compact('clinicalInfo')
        );
    }

    public function store(Request $request)
    {
        $clinicalInfo = new ClinicalInformation();

        // Get the authenticated user
        $user = auth()->user();
        $clinicalInfo->id_user = $user->id;

        // Set the clinical information from the form input
        $clinicalInfo->blood_type = $request->blood_type;
        $clinicalInfo->is_donor = $request->is_donor;
        $clinicalInfo->height = $request->height;
        $clinicalInfo->weight = $request->weight;
        $clinicalInfo->allergies = $request->allergies;

        // Save the clinical information record
        $clinicalInfo->save();

        return redirect()->route('infoClinicas');
    }

    public function update(Request $request, $id)
    {
        $clinicalInfo = ClinicalInformation::findOrFail($id);

        // Get the authenticated user
        $user = auth()->user();
        $clinicalInfo->id_user = $user->id;

        // Update the clinical information from the form input
        $clinicalInfo->blood_type = $request->blood_type;
        $clinicalInfo->is_donor = $request->is_donor;
        $clinicalInfo->height = $request->height;
        $clinicalInfo->weight = $request->weight;
        $clinicalInfo->allergies = $request->allergies;

        // Save the updated clinical information record
        $clinicalInfo->save();

        return redirect()->route('infoClinicas');
    }
}
