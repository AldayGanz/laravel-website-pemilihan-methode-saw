<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller {

    public function index() {
        return view('datakriteria', [
            'users' => Kriteria::all(),
            'title' => 'Data kriteria'
        ]);
    }
    public function add() {
        return view('adddatakriteria',[
            'title' => 'Tambah Data kriteria'
        ]);
    }
    public function edit($id){
        
        $kriteria = Kriteria::where('id', $id)->first();

        return view('editkriteria', [
            'kriteria' => $kriteria,
            'title' => 'Edit Data kriteria'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_kriteria       = $request->input('nama_kriteria');
        $bobot   = $request->input('bobot');
        $label = $request->input('label');
        
        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->nama_kriteria    = $nama_kriteria;
        $kriteria->bobot = $bobot;
        $kriteria->label = $label;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }


    public function dashboard(){
        $kriteria= Kriteria::count();

        return view('main', compact('kriteria'));

    }

    public function store(Request $request) {
        $nama_kriteria       = $request->input('nama_kriteria');
        $bobot   = $request->input('bobot');
        $label = $request->input('label');

        // TODO: Compare $password and $rePassword

        $kriteria           = new Kriteria;
        $kriteria->nama_kriteria     = $nama_kriteria;
        $kriteria->bobot = $bobot; // Don't forget to encryp!s
        $kriteria->label = $label;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }
    public function delete($id) {
        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->delete();
        return redirect()->back();
    }
}
