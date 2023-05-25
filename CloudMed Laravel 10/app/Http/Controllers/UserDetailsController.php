<?php

namespace App\Http\Controllers;

use App\Models\UFs;
use App\Models\UserDetails;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uf = UFs::all();

        $userName = Auth::user()->name;
        $userEmail = Auth::user()->email;
        $userId = Auth::user()->id;

        $user = User::with('userDetails')->find(Auth::id());
$userDetails = $user->userDetails;

if ($userDetails) {
    // O usuário tem um modelo UserDetails relacionado, você pode acessar as propriedades a partir daqui
    $id_user = $userDetails->id_user;
    // Restante do seu código
} else {
    // O usuário não possui um modelo UserDetails relacionado, você pode tratar isso conforme necessário
}


        $userDetail = UserDetails::where('id_user', $userId);
        $userDetail = $userDetail->get();

        $userDetail = UserDetails::where('id_user', $userDetail->id_user)->firstOrFail();


        return view('profile.profile', compact(
            'uf',
            'userName',
            'userId',
            'userEmail',
            'userDetail',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('profile.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('profile.edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetails $UserDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = Auth::user();
        $userDetail = $user->userDetail ?? new UserDetails(); // Verifica se o usuário possui um registro em user_details
    
        return view('profile.edit', compact('user', 'userDetail'));
    }
    



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    $user = Auth::user();
    $userDetail = $user->userDetail ?? new UserDetails(); // Verifica se o usuário possui um registro em user_details

    $userDetail->id_user = $user->id;
    $userDetail->sobrenome = $request->input('sobrenome');
    $userDetail->dataNascimento = $request->input('data_nascimento');
    // Preencha os demais campos do user_detail conforme necessário

    $userDetail->save();

    return redirect()->route('profile.index')->with('success', 'Informações atualizadas com sucesso!');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetails $UserDetails)
    {
        //
    }
}
