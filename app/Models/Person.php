<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['Name','Age','Address','city_id','Phone','Date_of_birth'];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function sons(){
        return $this->hasMany(Son::class);
    }
}
