<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use App\Models\Exams;
use App\Models\NameVaccines;
use App\Models\UFs;
use App\Models\Vaccines;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Auth::user()->id é usada para obter o id do usuário autenticado, logo, a variável recebe este id, permitindo que o controller faça uso deste valor para realizar consultas e outras operações que sejam específicas para aquele usuário.
        $userId = Auth::user()->id;

        // Para exibir apenas os exames e vacinas que pertencem ao usuário atualmente autenticado, é necessário modificar a consulta do banco de dados. Para isso, o método where() é usado para filtrar as instâncias de Exames que possuem um id_user correspondente ao id do usuário autenticado usando a variável global Auth::user()->id. O resultado é armazenado na variável $exames e passado para a view.
        $exames = Exams::where('id_user', $userId)->get();
        $vacinas = Vaccines::where('id_user', $userId)->get();

        // último exame registrado
        $ultimoExame = Exams::where('id_user', $userId)->latest()->first();
        // número total de exames cadastrados
        $totalExames = Exams::where('id_user', $userId)->count();

        // última vacina registrada
        $ultimaVacina = Vaccines::where('id_user', $userId)->latest()->first();
        // número total de vacinas cadastradas
        $totalVacinas = Vaccines::where('id_user', $userId)->count();

        // verifica se o último exame possui um valor para a propriedade 'instituição' e se a última vacina possui um valor para a propriedade 'fabricante' já que são opcionais no formulário.
        $isInstituicao = $ultimoExame ? !!$ultimoExame->instituicao : false;
        $isFabricante = $ultimaVacina ? !!$ultimaVacina->fabricante : false;

        return view('user.dashboard', compact(
            'exames',
            'vacinas',
            'ultimoExame',
            'totalExames',
            'isInstituicao',
            'isFabricante',
            'ultimaVacina',
            'totalVacinas',
        ));
    }
}
