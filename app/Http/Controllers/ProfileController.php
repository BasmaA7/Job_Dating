<?php

namespace App\Http\Controllers;
 
 use App\Models\Announcements;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('apprenants.Profile');


    }
   
//     public function addskills(Request $request)
// {
     
//     $user = User::findOrFail(auth()->user()->id);
//     $user->skills()->sync($request->input('skill_ids'));
//     return redirect()->route('home')
//     ->with('seccess','Announcement update successfully');
// }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function add(Request $request, User $user)

    // {
    //     dd($request->input('skills'));
    //     $user->skills()->sync($request->input('skills'));
    //     return redirect()->back()->with('success', 'Skills added successfully.');
    // }

public function addSkills(Request $request)
{
    $user = auth()->user();

    // Validez la requête selon vos besoins
    $request->validate([
        'skill_ids' => 'required|array',
        'skill_ids.*' => 'exists:skills,id',
    ]);

    // Attachez les compétences sélectionnées à l'utilisateur
    $user->skills()->sync($request->input('skill_ids'), false);

    return redirect()->route('profile.show')->with('success', 'Compétences ajoutées avec succès.');
}
    

    /**
     * Display the specified resource.
     */
    public function show(User $profile)
    {
        return view('apprenants.Profile');
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
    public function apply(Request $request){
        $user = auth()->user();
    
        // Assuming the relationship is one-to-many
        foreach ($request->input("announcement_ids") as $announcementId) {
            // Check if the announcement_id is already associated with the user
            if ($user->announcements()->where('id', $announcementId)->exists()) {
                // Display an error message
                return redirect(route("home"))->withErrors(['error' => 'You have already applied for this announcement.']);
            }
    
            // Attach the announcement_id without detaching existing ones
            $user->announcements()->attach($announcementId);
        }
    
        return redirect(route("home"));
    }
    
    public function showMatchingAnnounce()
{
    $userSkills = auth()->user()->skills()->pluck('id')->toArray();

    $matchingAnnouncements = Announcements::whereHas('skills', function ($query) use ($userSkills) {
        $query->whereIn('skills.id', $userSkills);
    }, '>=', count($userSkills) * 0.5)->get();

    return view('home', ['matchingAnnouncements' => $matchingAnnouncements]);
}

   
    
}
