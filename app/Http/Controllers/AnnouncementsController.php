<?php

namespace App\Http\Controllers;

use App\Models\Announcements;
use App\Http\Requests\StoreAnnouncementsRequest;
use App\Http\Requests\UpdateAnnouncementsRequest;
use App\Models\Company;
use App\Models\Skill;
use Illuminate\View\ViewException;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $announcements = Announcements::latest()->paginate(5);
        $companies= Company::all();
        return view('admin.announcements.index',compact('announcements','companies'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies= Company::all();
        $skills= Skill::all();
        return view('admin.announcements.create',compact('companies','skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnnouncementsRequest $request)
    {
        $announcement = Announcements::create($request->validated());
 
        $announcement->skills()->attach($request->input('skills'));
        
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('announcement_images', 'public');
        $validatedData['image_path'] = $imagePath;
    }
    
        return redirect()->route('announcements.index')
        ->with('success','Announcement created successfully.');
    }

    /**
     * Display the specified resource.
     */
   

   
     public function edit(Announcements $announcement)
     {
        $allSkills = Skill::all(); 

        $companies = Company::all();
         return view('admin.announcements.edit', compact('announcement','allSkills','companies'));
     }
     

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementsRequest $request, Announcements $announcement)
    {

        $announcement->update($request->validated());
        $announcement->skills()->sync($request->input('skills', []));

        return redirect()->route('announcements.index')
                         ->with('seccess','Announcement update successfully');
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcements $announcement)
    {
        $announcement->delete();
         
        return redirect()->route('announcements.index')
                        ->with('success','announcements deleted successfully');
    }
}
