<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('apprenants.Profile');


    }
   
    public function addskills(Request $request)
{
     
    $user = User::findOrFail(auth()->user()->id);
    $user->skills()->sync($request->input('skill_ids'));
    return redirect()->route('home')
    ->with('seccess','Announcement update successfully');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( User $profile)
    {
       return view('apprenants.editProfile');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request,User $profile)
    {
       
        $profile->update($request->validated());
        return redirect()->route('Profile.index')
                         ->with('seccess','Profile update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $profile)
    {
        //
    }
}
