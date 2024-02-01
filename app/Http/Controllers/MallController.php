<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mall;

class MallController extends Controller {
    public function index() {
        $data = Mall::all();        
        return view("mall.mall", compact("data"));        
    }


    public function create() {
        return view('mall.create');
    }

    public function store(Request $request) {        
        $mall = new Mall;

        $mall->nama = $request->nama;

        $mall->save();        
                
        return redirect('/mall');
    }

    public function edit($id) {        
        $mall = Mall::find($id);                        
        return view("mall.edit", compact("mall"));        
    }

    public function update(Request $request, $id) {
        
        $mall = Mall::find($id);
        $mall->nama = $request->nama; 
        $mall->save();

        return redirect('mall');
    }

    public function destroy($id) {
        $mall = Mall::find($id);
        $mall->delete();

        return redirect("mall");
    }

}