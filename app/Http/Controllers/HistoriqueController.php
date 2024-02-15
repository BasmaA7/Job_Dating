<?php

namespace App\Http\Controllers;
use App\Models\Announcements;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HistoriqueController extends Controller
{



  public function index()
  {
      // Récupérer le nombre d'utilisateurs
      $usersCount =User::count();


      // Récupérer le nombre d'annonces
      $annoncesCount = Announcements::count();

      
    return view("historique",compact("annoncesCount","usersCount"));


    
  }
//     public function getMostPopulair(){

//     // $MorepopulaireSkills=[];
//     $skills = Skill::all();
//     $announcements = Announcements::all();
//     $MorepopulaireSkills=$skills->skill()->$announcements ->announcement()->count();
//     dd($MorepopulaireSkills);
//     if($MorepopulaireSkills->count()>1){
//       select('skill_id', DB::raw('COUNT(*) AS cnt'))
//       ->groupBy('skill_id')
//       ->orderByRaw('COUNT(*) DESC')
//       ->limit(3)
//       ->get();
//   return view('historique',compact('skills','annoucements'));

//     }
    
   
// }
}  


