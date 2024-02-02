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
        "skills",
        "companie_id",

    ];

    public function company(){
      return $this->belongsTo(Company::class);
    }
}
