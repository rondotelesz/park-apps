<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lahan_parkir;
use App\Models\Mall;

class LahanParkirController extends Controller {
    public function index() {
        $data = Lahan_parkir::with('mall')->get();
        $title = "Lahan Parkir";            
        return view("lahan_parkir.lahan_parkir", compact("data", "title"));        
    }

    public function create() {
        $mall = Mall::all();
        return view("lahan_parkir.create", compact("mall"));
    }

    public function store(Request $request) {
        $lahan_parkir = new Lahan_parkir;        
        $lahan_parkir->mall_id = $request->mall_id;
        $lahan_parkir->lokasi = $request->lokasi;
        $lahan_parkir->petak = $request->petak;
        $lahan_parkir->lantai = $request->lantai;
        $lahan_parkir->save();

        return redirect("/lahan_parkir");
    }

    public function edit($id) {
        $lahan_parkir = Lahan_parkir::find($id);
        $mall = Mall::all();
        return view("lahan_parkir.edit", compact("lahan_parkir", "mall"));
    }

    public function update(Request $request, $id) {
        $lahan_parkir = Lahan_parkir::find($id);        
        $lahan_parkir->mall_id = $request->mall_id;
        $lahan_parkir->lokasi = $request->lokasi;
        $lahan_parkir->petak = $request->petak;
        $lahan_parkir->lantai = $request->lantai;
        $lahan_parkir->save();
        
        return redirect("lahan_parkir");
    }
}