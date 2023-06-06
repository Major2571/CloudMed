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
        $nameVaccines = NameVaccines::all();

        $filterName = $request->input('filterName');
        $filterDoseType = $request->input('filterDoseType');

        $query = Vaccines::where('id_user', Auth::user()->id);

        if ($filterName) {
            $query->where('id_vacina', $filterName);
        }

        if ($filterDoseType) {
            $query->where('tipoDose', $filterDoseType);
        }

        $vaccines = $query->get();

        return view(
            'user.vaccines.index',
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
            'user.vaccines.create',
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
        $vacinne->id_vacina = $request->input('vaccine_name');
        $vacinne->id_uf = $request->input('uf');
        $vacinne->titulo = $request->input('new_vaccine');
        $vacinne->tipoDose = $request->input('dose_type');
        $vacinne->data = $request->input('date');
        $vacinne->fabricante = $request->input('manufacturer');
        $vacinne->lote = $request->input('lot');
        $vacinne->cidade = $request->input('city');

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
            'user.vaccines.edit',
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

        // Set the ID of the user who is updating the vaccine
        $user = auth()->user();
        $vacinne->id_user = $user->id;

        // Update the vaccine attributes with the input values from the request
        $vacinne->id_vacina = $request->input('vaccine_name');
        $vacinne->id_uf = $request->input('uf');
        $vacinne->titulo = $request->input('new_vaccine');
        $vacinne->tipoDose = $request->input('dose_type');
        $vacinne->data = $request->input('date');
        $vacinne->fabricante = $request->input('manufacturer');
        $vacinne->lote = $request->input('lot');
        $vacinne->cidade = $request->input('city');

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
        $vaccines->where('id', $id)->delete();
        return redirect()->route('myVaccines');
    }
}
