<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use App\Models\Vaccines;
use App\Models\Medications;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;

        // número total de exames cadastrados
        $totalExams = Exams::where('id_user', $userId)->count();
        $totalVaccines = Vaccines::where('id_user', $userId)->count();
        $totalMedications = Medications::where('id_user', $userId)->count();

        // Exibe os ultimos 5 registros cadastrados
        $liDescVaccines = Vaccines::where('id_user', $userId)->orderBy('created_at', 'desc')->paginate(5);
        $liDescExams = Exams::where('id_user', $userId)->orderBy('created_at', 'desc')->paginate(5);
        $liDescMedication = Medications::where('id_user', $userId)->orderBy('created_at', 'desc')->paginate(5);

        return view('user.dashboard', compact(
            'totalExams',
            'totalVaccines',
            'liDescVaccines',
            'liDescExams',
            'liDescMedication',
            'totalMedications',
        ));
    }
}
