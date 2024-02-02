<?php

namespace App\Http\Controllers;

use App\Models\Announcements;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Home $home)
    {
        $announcements = Announcements::all();

        return view('home', compact('home', 'announcements'));
    }
}
