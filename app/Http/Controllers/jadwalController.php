<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    public function index(){
        $jadwal = Jadwal::where('is_praktikum' , 0)->get();
        $jadwal_praktikum = Jadwal::where('is_praktikum' , 1)->get();
        return view('main.jadwal', compact('jadwal', 'jadwal_praktikum'));
    }

    public function search(Request $request){
        $request = $request->input('Search');
        $jadwal = Jadwal::where('Mata_Kuliah', $request)->get();

        return view('main.jadwal', compact('jadwal', 'request'));
    }

    public function matkul($Matkul){
        $jadwal = Jadwal::where('Mata_Kuliah', $Matkul)->first();
        return view('main.matkul', compact('jadwal'));
    }


    
}
