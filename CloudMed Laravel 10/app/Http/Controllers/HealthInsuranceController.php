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
        $userId = Auth::user()->id;

        $healthInsurance = HealthInsurance::where('id_user', $userId)->get();

        // dd($healthInsurance);

        return view(
            'profile.cartaoConvenio',
            compact(
                'healthInsurance'
            )
        );
    }

    public function store(Request $request)
    {
        $healthInsuranceInfo = new HealthInsurance();

        $healthInsuranceInfo->id_user = $request->id_user;
        $healthInsuranceInfo->insurance_number = $request->input('insurance_number');
        $healthInsuranceInfo->insurance_name = $request->input('insurance_name');
        $healthInsuranceInfo->insurance_plan = $request->input('insurance_plan');

        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/health_card/insurance_file', $fileName);
            $healthInsuranceInfo->file_insurance_name = $fileName;
        }


        $user = auth()->user();
        $healthInsuranceInfo->id_user = $user->id;

        $healthInsuranceInfo->save();

        return redirect()->route('meuConvenio');
    }


    public function update(Request $request, $id)
    {
        $healthInsuranceInfo = HealthInsurance::FindOrFail($id);

        $healthInsuranceInfo->id_user = $request->id_user;
        $healthInsuranceInfo->insurance_number = $request->input('insurance_number');
        $healthInsuranceInfo->insurance_name = $request->input('insurance_name');
        $healthInsuranceInfo->insurance_plan = $request->input('insurance_plan');

        if ($request->hasFile('arquivo')) {
            if (Storage::exists('public/health_card/insurance_file/' . $healthInsuranceInfo->file_insurance_name)) {
                Storage::delete('public/health_card/insurance_file/' . $healthInsuranceInfo->file_insurance_name);
            }

            $file = $request->file('arquivo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/health_card/insurance_file', $fileName);
            $healthInsuranceInfo->file_insurance_name = $fileName;
        }

        $user = auth()->user();
        $healthInsuranceInfo->id_user = $user->id;

        $healthInsuranceInfo->save();

        return redirect()->route('meuConvenio');
    }
}