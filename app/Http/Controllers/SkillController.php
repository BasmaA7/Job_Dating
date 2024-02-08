<?php

namespace App\Http\Controllers;

use App\Models\skills;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = skills::all();
        return view('apprenants.skills',compact('skills'));
    }
}
