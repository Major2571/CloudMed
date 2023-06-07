<?php

namespace App\Http\Controllers;

use App\Models\NameVaccines;
use App\Models\UFs;
use App\Models\Vaccines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VaccinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Retrieve all vaccine names from the database
        $nameVaccines = NameVaccines::all();

        // Retrieve the filter inputs from the request
        $filterName = $request->input('filterName');
        $filterDoseType = $request->input('filterDoseType');

        // Create a base query to retrieve vaccines for the current user
        $query = Vaccines::where('id_user', Auth::user()->id);

        // Apply filters to the query if provided
        if ($filterName) {
            $query->where('id_vaccine', $filterName);
        }

        if ($filterDoseType) {
            $query->where('doses', $filterDoseType);
        }

        // Execute the query and retrieve the filtered vaccines
        $vaccines = $query->get();

        // Return the 'user.vaccines.index' view, passing the variables as compact
        return view(
            'user.vaccines.indexVaccines',
            compact(
                'vaccines',
                'filterName',
                'filterDoseType',
                'nameVaccines'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve all vaccine names from the database
        $vaccineNames = NameVaccines::all();

        // Retrieve all UF (Unidade Federativa) data from the database
        $uf = UFs::all();

        // Return the 'user.vaccines.create' view, passing the variables as compact
        return view(
            'user.vaccines.createVaccines',
            compact(
                'uf',
                'vaccineNames'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new instance of Vaccines Model
        $vacinne = new Vaccines;

        // Assign the current user's ID to the model's user_id property
        $user = auth()->user();
        $vacinne->id_user = $user->id;

        // Assign values from request inputs to the model properties
        $vacinne->id_vaccine = $request->input('vaccine_name');
        $vacinne->id_uf = $request->input('uf');
        $vacinne->new_vaccine_name = $request->input('new_vaccine');
        $vacinne->doses = $request->input('dose_type');
        $vacinne->vaccination_date = $request->input('vaccination_date');
        $vacinne->manufacturer = $request->input('manufacturer');
        $vacinne->lot_number = $request->input('lot_number');
        $vacinne->city = $request->input('city');

        // Save the vaccine to the database
        $vacinne->save();

        // Redirect the user to the 'myVaccines' route
        return redirect()->route('myVaccines');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vaccines $vaccines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vaccines $vaccines, $id)
    {
        // Find the specific vaccine by its ID
        $vacinne = Vaccines::FindOrFail($id);

        // Retrieve all vaccine names from the database
        $vaccineNames = NameVaccines::all();

        // Retrieve all UF (Unidade Federativa) data from the database
        $uf = UFs::all();

        // Return the 'user.vaccines.create' view, passing the variables as compact
        return view(
            'user.vaccines.editVaccines',
            compact(
                'vacinne',
                'uf',
                'vaccineNames'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the specific vaccine by its ID
        $vacinne = Vaccines::FindOrFail($id);

        // Update the vaccine attributes with the input values from the request
        $vacinne->id_vaccine = $request->input('vaccine_name');
        $vacinne->id_uf = $request->input('uf');
        $vacinne->new_vaccine_name = $request->input('new_vaccine');
        $vacinne->doses = $request->input('dose_type');
        $vacinne->vaccination_date = $request->input('vaccination_date');
        $vacinne->manufacturer = $request->input('manufacturer');
        $vacinne->lot_number = $request->input('lot_number');
        $vacinne->city = $request->input('city');

        // Save the updated vaccine to the database
        $vacinne->save();

        // Redirect to the 'myVaccines' route
        return redirect()->route('myVaccines');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vaccines $vaccines, $id)
    {
        // Find the vaccine by its ID or throw an exception if not found and Delete the vaccine from the database
        Vaccines::FindOrFail($id)->delete();

        // Redirect the user to the "myExams" route
        return redirect()->route('myVaccines');
    }
}