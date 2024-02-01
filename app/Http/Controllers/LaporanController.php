<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class LaporanController extends Controller {
    public function index() {                
        $transaksi = Transaksi::whereNotNull('waktu_keluar')->whereMonth('waktu_masuk', \Carbon\Carbon::now()->month)->get();
        $data = [
            "jumlah_mobil" => count($transaksi),
            "biaya" => 5000,
            "total" => 5000 * count($transaksi)
        ];
        return view("laporan", compact("transaksi", 'data'));        
    }
   
}