<?php

namespace App\Http\Controllers;

use App\Models\Exames;
use App\Models\Vacinas;

use Illuminate\Support\Facades\Auth;

use App\Models\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
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

        return view('welcome', compact( 'exames', 
                                        'vacinas', 
                                        'ultimoExame', 
                                        'totalExames',
                                        'isInstituicao',
                                        'isFabricante',
                                        'ultimaVacina',
                                        'totalVacinas',
                                    ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
