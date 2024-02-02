<?php

namespace App\Http\Controllers;

use App\Models\Announcements;
use App\Http\Requests\StoreAnnouncementsRequest;
use App\Http\Requests\UpdateAnnouncementsRequest;
use App\Models\Company;
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
        return view('announcements.index',compact('announcements','companies'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $companies= Company::all();
        return view('announcements.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnnouncementsRequest $request)
    {
        Announcements::create($request->validated());
         
        return redirect()->route('announcements.index')
        ->with('success','Announcement created successfully.');
    }

    /**
     * Display the specified resource.
     */
   

   
     public function edit(Announcements $announcement)
     {
        $companies = Company::all();
         return view('announcements.edit', compact('announcement','companies'));
     }
     

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementsRequest $request, Announcements $announcement)
    {

        $announcement->update($request->validated());
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
