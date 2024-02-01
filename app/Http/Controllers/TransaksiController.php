<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;
use App\Models\Lahan_parkir;

class TransaksiController extends Controller {   
    
    public function store(Request $request) {                
        if(Auth::user()->bagian == "gerbang_masuk") {
            $transaksi = Transaksi::where('nomor_kendaraan', $request->nomor_kendaraan)->whereNull('waktu_keluar')->first();
            if($transaksi) {
                return view('kendaraan_ada');
            }
            $transaksi = new Transaksi;

            $transaksi->nomor_kendaraan = $request->nomor_kendaraan;
            $transaksi->waktu_masuk = \Carbon\Carbon::now()->toDateTimeString();
            $transaksi->save();

            return redirect('dashboard');        
        } else if(Auth::user()->bagian == "ruang_parkir") {            
            $transaksi = Transaksi::find($request->transaksi_id);
            $transaksi->lahan_parkir_id = $request->lahan_parkir_id;
            
            $transaksi->save();
            
            $lahan_parkir = Lahan_parkir::find($request->lahan_parkir_id);
            $lahan_parkir->petak = $lahan_parkir->petak - 1;
            $lahan_parkir->save();            

            return redirect('dashboard');
        } else if(Auth::user()->bagian == "gerbang_keluar") {                                    
            $transaksi = Transaksi::find($request->transaksi_id);
            $transaksi->waktu_keluar = \Carbon\Carbon::now()->toDateTimeString();

            $transaksi->save();
            
            $lahan_parkir = Lahan_parkir::find($transaksi->lahan_parkir_id);
            $lahan_parkir->petak = $lahan_parkir->petak + 1;
            $lahan_parkir->save();            
            
            return redirect('dashboard');
        } 
    }
}