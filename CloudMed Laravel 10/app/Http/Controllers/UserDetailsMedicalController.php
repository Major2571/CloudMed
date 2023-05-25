<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\CartaoConvenio;
use App\Models\CartaoSus;
use App\Models\InformacoesClinicas;

use Illuminate\Support\Facades\Auth;

class UserDetailsMedicalController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;

        $infoClinica = InformacoesClinicas::where('id_user', $userId)->get();

        return view('profile.infoClinicas', compact(
            'infoClinica',
        ));
    }
}
