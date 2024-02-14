<?php

namespace App\Http\Controllers;
use App\Models\Announcements;
use App\Models\Company;
use App\Models\User;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $announcements = Announcements::all();

        return view('/',compact('announcements'));
    }


   

    public function home()
    {
        $user = auth()->user();
        $companies = Company::all();
        if (auth()->check() && auth()->user()->hasrole('apprenant')) {
            $userSkills = auth()->user()->skills->pluck('id');
            $halfSkillsCount = $userSkills->count() / 2;
            $announcements = Announcements::whereExists(function ($query) use ($userSkills, $halfSkillsCount) {
                $query->select(DB::raw(1))
                    ->from('skills')
                    ->join('announcement_skill', 'skills.id', '=', 'announcement_skill.skill_id')
                    ->join('announcements', 'announcement_skill.announcements_id', '=', 'announcements.id') // Ajout de cette jointure
                    ->whereIn('skills.id', $userSkills)
                    ->groupBy('announcement_skill.announcements_id')
                    ->havingRaw('COUNT(*) >= ?', [$halfSkillsCount]);
            })->get();
        } else {
            $announcements = Announcements::all();
        }
        return view('home', compact('announcements', 'companies', 'user'));
    }

    
}
