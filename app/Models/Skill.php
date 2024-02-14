<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
protected $table='skills';
protected $fillable=[
    'name',
];

public function announcements(){
    return $this->belongsToMany(Announcements::class,'announcement_skill');
   }

   public function users(){
    return $this->belongsToMany(User::class, 'user_skill');
   }
}
