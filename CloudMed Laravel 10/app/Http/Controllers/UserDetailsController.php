<?php

namespace App\Http\Controllers;

use App\Models\UFs;
use App\Models\UserDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all UF (states)
        $uf = UFs::all();

        // Get the authenticated user's ID
        $userId = Auth::id();

        // Retrieve the user with their userDetails
        $user = User::with('userDetails')->find($userId);

        // Retrieve the userDetails for the user
        $userDetail = UserDetails::where('id_user', $userId)->get();

        return view(
            'profile.profile',
            compact(
                'uf',
                'user',
                'userDetail',
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Check if user already has userDetails and status is true
        $userDetails = UserDetails::where('id_user', $userId)->first();
        if ($userDetails && $userDetails->status) {
            // Redirect to the edit profile page
            return redirect()->route('profile.edit', $userDetails->id);
        }

        // Get all UF (states)
        $uf = UFs::all();

        // Get the authenticated user
        $user = Auth::user();

        return view(
            'profile.profileCad',
            compact(
                'uf',
                'user',
                'userId',
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new instance of UserDetails model
        $userDetail = new UserDetails();

        // Get the authenticated user
        $user = auth()->user();
        $userDetail->id_user = $user->id;

        // Set the user details from the form input
        $userDetail->last_name = $request->last_name;
        $userDetail->date_of_birth = $request->data_nasc;
        $userDetail->rg = $request->rg;
        $userDetail->cpf = $request->cpf;
        $userDetail->phone = $request->phone;
        $userDetail->city = $request->city;
        $userDetail->id_uf = $request->uf;
        $userDetail->status = true;

        // Save the user details
        $userDetail->save();

        return redirect()->route('profile');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Retrieve the user's userDetails
        $userDetail = $user->userDetails;

        // Get all UF (states)
        $uf = UFs::all();

        return view(
            'profile.profileEdit',
            compact(
                'user',
                'userDetail',
                'uf',
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the userDetails by ID
        $userDetail = UserDetails::findOrFail($id);

        // Get the authenticated user
        $user = auth()->user();
        $userDetail->id_user = $user->id;

        // Update the user details from the form input
        $userDetail->last_name = $request->last_name;
        $userDetail->date_of_birth = $request->data_nasc;
        $userDetail->rg = $request->rg;
        $userDetail->cpf = $request->cpf;
        $userDetail->phone = $request->phone;
        $userDetail->city = $request->city;
        $userDetail->id_uf = $request->uf;

        // Save the updated user details
        $userDetail->save();

        return redirect()->route('profile');
    }
}
