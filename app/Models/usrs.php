<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usrs extends Model
{
    use HasFactory;
    public function show(){
        return $this->hasMany('App\Models\Cmp');
    }
    public function shows(){
        return $this->hasOne('App\Models\Cmp');
    }
    
}
