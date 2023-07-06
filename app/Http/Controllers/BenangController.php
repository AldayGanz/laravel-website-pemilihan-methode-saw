<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benang;

class BenangController extends Controller {

    public function index() {
        return view('databenang', [
            'users' => Benang::all(),
            'title' => 'Data benang'
        ]);
    }
    public function add() {
        return view('adddatabenang',[
            'title' => 'Tambah Data benang'
        ]);
    }
    public function edit($id){
        
        $benang = Benang::where('id', $id)->first();

        return view('editdatabenang', [
            'benang' => $benang,
            'title' => 'Edit Data benang'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_alternatif   = $request->input('nama_alternatif');
        $warna       = $request->input('warna');
        $sifat_bahan = $request->input('sifat_bahan');
        $daya_serap_air = $request->input('daya_serap_air');
        $ukuran   = $request->input('ukuran');
        $ketahanan_benang   = $request->input('ketahanan_benang');
        
        $benang = Benang::where('id', $id)->first();
        $benang->nama_alternatif    = $nama_alternatif;
        $benang->warna     = $warna;
        $benang->ukuran = $ukuran;
        $benang->sifat_bahan = $sifat_bahan;
        $benang->daya_serap_air = $daya_serap_air;
        $benang->ketahanan_benang = $ketahanan_benang;

        $benang->save();

        return redirect()->to('/benang');
    }


    public function dashboard(){
        $benang= Benang::count();

        return view('main', compact('benang'));

    }

    public function store(Request $request) {
        $nama_alternatif   = $request->input('nama_alternatif');
        $warna       = $request->input('warna');
        $sifat_bahan = $request->input('sifat_bahan');
        $daya_serap_air = $request->input('daya_serap_air');
        $ukuran   = $request->input('ukuran');
        $ketahanan_benang   = $request->input('ketahanan_benang');

        $benang           = new Benang;
        $benang->nama_alternatif    = $nama_alternatif;
        $benang->warna     = $warna;
        $benang->ukuran = $ukuran;
        $benang->sifat_bahan = $sifat_bahan;
        $benang->daya_serap_air = $daya_serap_air;
        $benang->ketahanan_benang = $ketahanan_benang;

        $benang->save();

        return redirect()->to('/benang');
    }
    public function delete($id) {
        $benang = Benang::where('id', $id)->first();
        $benang->delete();
        return redirect()->back();
    }
}
