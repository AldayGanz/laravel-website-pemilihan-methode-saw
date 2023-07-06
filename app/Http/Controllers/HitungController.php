<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Benang;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function hitung(Request $request){ 

        $kriteria = Kriteria::sum('bobot');

        $bobot1 = 15/$kriteria;
        $bobot2 = 25/$kriteria;
        $bobot3 = 20/$kriteria;
        $bobot4 = 15/$kriteria;
        $bobot5 = 25/$kriteria;
        $widget1 = [
            'kriteria' => $bobot1,
        ];
        $widget2 = [
            'kriteria' => $bobot2,
        ];
        $widget3 = [
            'kriteria' => $bobot3,
        ];
        $widget4 = [
            'kriteria' => $bobot4,
        ];
        $widget5 = [
            'kriteria' => $bobot5,
        ];


        $benang = Benang::get();
        $data = Benang::orderby('nama_alternatif', 'asc')->get();

        $minC1 = Benang::min('warna');
        $maxC1 = Benang::max('warna');
        $minC2 = Benang::min('sifat_bahan');
        $maxC2 = Benang::max('sifat_bahan');
        $minC3 = Benang::min('daya_serap_air');
        $maxC3 = Benang::max('daya_serap_air');
        $minC4 = Benang::min('ukuran');
        $maxC4 = Benang::max('ukuran');
        $minC5 = Benang::min('ketahanan_benang');
        $maxC5 = Benang::max('ketahanan_benang');

        $C1min =[
            'benang' => $minC1,
        ];
        $C1max =[
            'benang' => $maxC1,
        ];
        $C2min =[
            'benang' => $minC2,
        ];
        $C2max =[
            'benang' => $maxC2,
        ];
        $C3min =[
            'benang' => $minC3,
        ];
        $C3max =[
            'benang' => $maxC3,
        ];
        $C4min =[
            'benang' => $minC4,
        ];
        $C4max =[
            'benang' => $maxC4,
        ];
        $C5min =[
            'benang' => $minC5,
        ];
        $C5max =[
            'benang' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4','widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max','C5min','C5max'));
    }

}
