<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mall extends Model
{
    public function lahan_parkir() 
    {
        return $this->hasMany("App\Models\Lahan_parkir");
    }    
}
