<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;
     protected $table='announcements';
    protected $fillable=[
        "name",
        "descreption",
        
        "companie_id",
        "image",

    ];

    public function company(){
      return $this->belongsTo(Company::class);
    }
    public function skills(){
      return $this->belongsToMany(Skill::class,'announcement_skill');
    }
    public function users(){
      return $this->belongsToMany(User::class,'announcement_user');
    }
}
