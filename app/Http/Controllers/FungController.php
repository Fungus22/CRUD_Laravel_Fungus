<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\varian;

class FungController extends Controller
{
    public function index() {
        $varian = varian::all();
        $data = [
            "varian"  =>  $varian
        ];
        return view("fung.index", $data);
    }
    public function destroy($id){
        $varian = varian::where("id", $id)->first();
        $varian->delete();

        return redirect("/index");
    }

    //menampilkan tambah dan menjalankan menambah 
    public function tambah() {
        return view("fung.tambah");
    }
    public function menambah(Request $request) {
        $nama = $request->nama;
        $jenis = $request->jenis;
        $keterangan = $request->keterangan;

        $datavarian = new varian();
        $datavarian->nama = $nama;
        $datavarian->jenis = $jenis;
        $datavarian->keterangan = $keterangan;
        $datavarian->save();

        return redirect("/index");
    }

    //menampilkan edit dan menjalankan memperbarui
    public function edit($id) {
        $varian = varian::where("id", $id)->first();
        $data = [
            "varian" => $varian
        ];

        return view("fung.edit", $data);
    }
    public function memperbarui(Request $request, $id) {
        $id = $request->id;
        $nama = $request->nama;
        $jenis = $request->jenis;
        $keterangan = $request->keterangan;

        $datavarian = varian::where("id", $id)->first();
        $datavarian->id = $id;
        $datavarian->nama = $nama;
        $datavarian->jenis = $jenis;
        $datavarian->keterangan = $keterangan;
        $datavarian->save();

        return redirect("/index");
    }
}
