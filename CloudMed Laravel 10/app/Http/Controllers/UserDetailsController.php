<?php

namespace App\Http\Controllers;

use App\Models\UFs;
use App\Models\UserDetails;
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

        return view('profile.profile', compact(
            'uf',
            'userName',
            'userId',
            'userEmail'
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
    public function edit(UserDetails $UserDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserDetails $UserDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetails $UserDetails)
    {
        //
    }
}
