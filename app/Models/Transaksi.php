<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function lahan_parkir() {
        return $this->belongsTo("App\Models\Lahan_parkir");
    }
}
