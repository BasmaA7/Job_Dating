<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    use HasFactory;
protected $table='skills';
protected $fillable=[
    'name',
];
//    public function users(){
//     return $this->belongsToMany(User::class,'user_skill');
//    }
}