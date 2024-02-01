<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan_parkir extends Model
{
    public function mall() 
    {
        return $this->belongsTo("App\Models\Mall");
    }

    public function transaksi() 
    {
        return $this->hasMany("App\Models\Transaksi");
    }
}
