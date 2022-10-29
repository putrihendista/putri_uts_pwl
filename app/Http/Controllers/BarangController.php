<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function viewBarang(){
        $barang = Barang::all();
        return view('home', ['barang'=>$barang]);
        
    }

    public function detailBarang($id){
        $barang = Barang::find($id);
        return view('detailBarang', ['barang'=>$barang]);
        
    }
}
