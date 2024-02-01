<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mall;
use App\Models\Transaksi;

class LaporanKendaraanController extends Controller {
    public function index() {                
        $transaksi = Transaksi::with('lahan_parkir.mall')->whereNull('waktu_keluar')->whereNotNull('lahan_parkir_id')->whereNotNull('waktu_masuk')->get();
        
        return view("laporan_kendaraan", compact("transaksi"));        
    }
   
}