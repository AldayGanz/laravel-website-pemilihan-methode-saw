<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\Benang;
use App\Models\Bobot;

class DashboardController extends Controller {

    public function index() {
        
        $benang= Benang::count();
        $kriteria= Kriteria::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('benang','kriteria'))
        ;

        

        
    }
    
}
