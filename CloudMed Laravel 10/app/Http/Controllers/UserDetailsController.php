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

        $user = Auth::user();
        $userId = Auth::id();

        $user = User::with('userDetails')->find(Auth::id());
        $userDetails = $user->userDetails;

        $userDetail = UserDetails::where('id_user', $userId);
        $userDetail = $userDetail->get();

        // dd($userDetail);

        return view('profile.profile', compact(
            'uf',
            'user',            
            'userDetail',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $userDetails = UserDetails::where('id_user', $userId)->first();
    
        if ($userDetails && $userDetails->status) {
            return redirect()->route('profile.edit', $userDetails->id);
        }

        $uf = UFs::all();
        $user = Auth::user();

        return view('profile.addProfileDetails', compact(
            'uf',
            'user',
            'userId',
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userDetail = new UserDetails();
        $user = auth()->user();
        
        $userDetail->id_user = $user->id;
        $userDetail->sobrenome = $request->input('sobrenome');
        $userDetail->dataNascimento = $request->input('data_nasc');
        $userDetail->rg = $request->input('rg');
        $userDetail->cpf = $request->input('cpf');
        $userDetail->email = $request->input('email');
        $userDetail->telefone = $request->input('telefone');
        $userDetail->cidade = $request->input('cidade');
        $userDetail->id_uf = $request->input('uf');
        
        $userDetail->status = true;

        $userDetail->save();

        return redirect()->route('profile');
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
        $userDetail = $user->userDetails;
        $uf = UFs::all();

        return view('profile.editProfile', compact(
            'user',
            'userDetail',
            'uf',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $userDetail = UserDetails::FindOrFail($id);

        $user = auth()->user();
        
        $userDetail->id_user = $user->id;
        $userDetail->sobrenome = $request->input('sobrenome');
        $userDetail->dataNascimento = $request->input('data_nasc');
        $userDetail->rg = $request->input('rg');
        $userDetail->cpf = $request->input('cpf');
        $userDetail->email = $request->input('email');
        $userDetail->telefone = $request->input('telefone');
        $userDetail->cidade = $request->input('cidade');
        $userDetail->id_uf = $request->input('uf');
        
        $userDetail->status = true;

        $userDetail->save();

        return redirect()->route('profile');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetails $UserDetails)
    {
        //
    }
}
