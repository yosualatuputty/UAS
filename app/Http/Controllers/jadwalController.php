<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    public function index(){
        $jadwal = Jadwal::all();
        return view('main.jadwal', compact('jadwal'));
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

    public function done(Request $request){
        $ID = $request->input('ID');
        $status = $request->input('status');
        $jadwal = Jadwal::where('ID', $ID)->first();
        $jadwal->is_done = $status;
        $jadwal->save();
        return $this->index();
    }
    
}
