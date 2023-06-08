<?php

namespace App\Http\Controllers;

use App\Models\ClinicalInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClinicalInformationController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $clinicalInfo = ClinicalInformation::where('id_user', $userId)->get();

        return view(
            'profile.infoClinicas',
            compact(
                'clinicalInfo',
            )
        );
    }

    public function store(Request $request)
    {
        $clinicalInfo = new ClinicalInformation();

        $clinicalInfo->id_user = $request->id_user;
        $clinicalInfo->blood_type = $request->input('blood_type');
        $clinicalInfo->is_donor = $request->input('is_donor');
        $clinicalInfo->height = $request->input('height');
        $clinicalInfo->weight = $request->input('weight');
        $clinicalInfo->allergies = $request->input('allergies');

        $user = auth()->user();
        $clinicalInfo->id_user = $user->id;

        $clinicalInfo->save();

        return redirect()->route('infoClinicas');

    }

    public function update(Request $request, $id)
    {
        $clinicalInfo = ClinicalInformation::FindOrFail($id);

        $clinicalInfo->id_user = $request->id_user;
        $clinicalInfo->blood_type = $request->input('blood_type');
        $clinicalInfo->is_donor = $request->input('is_donor');
        $clinicalInfo->height = $request->input('height');
        $clinicalInfo->weight = $request->input('weight');
        $clinicalInfo->allergies = $request->input('allergies');

        $user = auth()->user();
        $clinicalInfo->id_user = $user->id;

        $clinicalInfo->save();

        return redirect()->route('infoClinicas');
    }

}