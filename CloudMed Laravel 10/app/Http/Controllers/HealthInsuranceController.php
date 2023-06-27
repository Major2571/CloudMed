<?php

namespace App\Http\Controllers;

use App\Models\HealthInsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class HealthInsuranceController extends Controller
{
    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::user()->id;

        // Retrieve the HealthInsurance records for the user
        $healthInsurance = HealthInsurance::where('id_user', $userId)->get();

        return view(
            'profile.cartaoConvenio',
            compact('healthInsurance')
        );
    }

    public function store(Request $request)
    {
        $healthInsuranceInfo = new HealthInsurance();

        // Get the authenticated user
        $user = auth()->user();
        $healthInsuranceInfo->id_user = $user->id;

        // Set the health insurance information from the form input
        $healthInsuranceInfo->insurance_number = $request->insurance_number;
        $healthInsuranceInfo->insurance_name = $request->insurance_name;
        $healthInsuranceInfo->insurance_plan = $request->insurance_plan;

        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/health_card/insurance_file', $fileName);
            $healthInsuranceInfo->file_insurance_name = $fileName;
        }

        // Save the health insurance information record
        $healthInsuranceInfo->save();

        return redirect()->route('meuConvenio');
    }


    public function update(Request $request, $id)
    {
        $healthInsuranceInfo = HealthInsurance::findOrFail($id);

        // Get the authenticated user
        $user = auth()->user();
        $healthInsuranceInfo->id_user = $user->id;

        // Update the health insurance information from the form input
        $healthInsuranceInfo->insurance_number = $request->insurance_number;
        $healthInsuranceInfo->insurance_name = $request->insurance_name;
        $healthInsuranceInfo->insurance_plan = $request->insurance_plan;

        if ($request->hasFile('arquivo')) {
            if (Storage::exists('public/health_card/insurance_file/' . $healthInsuranceInfo->file_insurance_name)) {
                Storage::delete('public/health_card/insurance_file/' . $healthInsuranceInfo->file_insurance_name);
            }

            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/health_card/insurance_file', $fileName);
            $healthInsuranceInfo->file_insurance_name = $fileName;
        }

        // Save the updated health insurance information record
        $healthInsuranceInfo->save();

        return redirect()->route('meuConvenio');
    }
}
