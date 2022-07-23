<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Son extends Model
{
    use HasFactory;
   
    protected $fillable = ['Name','person_id','Age','Email'];

    public function person(){
        return $this->belongsTo(Person::class);
    }
}
