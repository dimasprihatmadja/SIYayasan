<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    public function welcome(){
        $okmek = DB::table('tb_welcome')->first();
        $berita = DB::table('tb_inputberita')->get();
        $portofolio = DB::table('tb_portofolio')->get();
        return view('welcome', compact('okmek','berita','portofolio'));
    }
     public function berita(){
        $okmek = DB::table('tb_inputberita')->get();
        return view('berita', ['okmek' => $okmek]);
    }

    public function detailberita($id){
        $okmek = DB::table('tb_inputberita')->where('id',$id)->first();
        return view('detailberita', ['okmek' => $okmek]);
    }

    public function visimisi(){
        $okmek = DB::table('tb_visimisi')->first();
        $logo = DB::table('tb_logo')->first();
        return view('visimisi', compact('okmek','logo'));
    }

    public function logo() {
        $okmek = DB::table('tb_logo')->first();
        return view ('logo', ['okmek' => $okmek]);
    }

    public function pendiri() {
        $okmek = DB::table('tb_pendiri')->get();
        return view ('pendiri', ['okmek' => $okmek]);
    }

    public function pembina() {
        $okmek = DB::table('tb_pembina')->get();
        return view ('pembina', ['okmek' => $okmek]);
    }

    public function pengurus() {
        $okmek = DB::table('tb_pengurus')->get();
        return view ('pengurus', ['okmek' => $okmek]);
    }

    public function pengawas() {
        $okmek = DB::table('tb_pengawas')->get();
        return view ('pengawas', ['okmek' => $okmek]);
    }

    public function fotokegiatan() {
        $okmek = DB::table('tb_fotokegiatan')->get();
        return view ('fotokegiatan', ['okmek' => $okmek]);
    }

    public function fotobangunan() {
        $okmek = DB::table('tb_fotobangunan')->get();
        return view ('fotobangunan', ['okmek' => $okmek]);
    }

    public function karir() {
        $okmek = DB::table('tb_karir')->get();
        return view ('karir', ['okmek' => $okmek]);
    }

    public function detailkarir($id){
        $okmek = DB::table('tb_karir')->where('id',$id)->first();
        return view('detailkarir', ['okmek' => $okmek]);
    }

    public function unitpendidikan() {
        $okmek = DB::table('tb_unitpendidikan')->first();
        return view ('unitpendidikan', ['okmek' => $okmek]);
    }

    public function unitkesejahteraan() {
        $okmek = DB::table('tb_unitkesejahteraan')->first();
        return view ('unitkesejahteraan', ['okmek' => $okmek]);
    }

    public function unitbisnis() {
        $okmek = DB::table('tb_unitbisnis')->first();
        return view ('unitbisnis', ['okmek' => $okmek]);
    }
}
