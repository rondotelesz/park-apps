<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mall;
use App\Models\Transaksi;
use App\Models\Lahan_parkir;

class DashboardController extends Controller {
    public function index() {
        $user = Auth::user();
        $mall = Mall::find(Auth::user()->mall_id);
        if(Auth::user()->bagian == "gerbang_masuk") {
            return view('dashboard_bagian/gerbang_masuk', compact('user', 'mall'));
        } else if(Auth::user()->bagian == "ruang_parkir") {
            $transaksi = Transaksi::whereNotNull('waktu_masuk')->get();
            $lahan_parkir = Lahan_parkir::where('petak', '>', 0)->get();
            return view('dashboard_bagian/ruang_parkir', compact('user', 'mall', 'transaksi', 'lahan_parkir'));
        } else if(Auth::user()->bagian == "gerbang_keluar"){
            $transaksi = Transaksi::whereNull('waktu_keluar')->whereNotNull('waktu_masuk')->get();
            return view('dashboard_bagian/gerbang_keluar', compact('user', 'mall', 'transaksi'));
        } else if (Auth::user()->bagian == "admin"){
            $transaksi = Transaksi::whereNull('waktu_keluar')->whereNotNull('waktu_masuk')->get();
            $lahan_parkir = Lahan_parkir::where('lokasi', 'lantai');
            return view('dashboard_bagian/admin', compact('mall', 'transaksi', 'lahan_parkir'));
        }


    }
}
