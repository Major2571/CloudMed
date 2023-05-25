<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use App\Models\Exames;
use App\Models\NomeVacinas;
use App\Models\UFs;
use App\Models\Vacinas;

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
        $exames = Exames::where('id_user', $userId)->get();
        $vacinas = Vacinas::where('id_user', $userId)->get();

        // último exame registrado
        $ultimoExame = Exames::where('id_user', $userId)->latest()->first();
        // número total de exames cadastrados
        $totalExames = Exames::where('id_user', $userId)->count();

        // última vacina registrada
        $ultimaVacina = Vacinas::where('id_user', $userId)->latest()->first();
        // número total de vacinas cadastradas
        $totalVacinas = Vacinas::where('id_user', $userId)->count();

        // verifica se o último exame possui um valor para a propriedade 'instituição' e se a última vacina possui um valor para a propriedade 'fabricante' já que são opcionais no formulário.
        $isInstituicao = $ultimoExame ? !!$ultimoExame->instituição : false;
        $isFabricante = $ultimaVacina ? !!$ultimaVacina->fabricante : false;

        return view('dashboard', compact(
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

    public function create()
    {
        $nomeVacinas = NomeVacinas::all();
        $especialidades = Especialidade::all();
        $uf = UFs::all();

        return view('novoCadExame', compact('especialidades', 'uf', 'nomeVacinas'));
    }
}
