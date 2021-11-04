<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use Alert;

class AboutController extends Controller
{
    

    public function home(){
        return view('admin.home');
    }

    // FITUR INPUT

    

    public function inputberita() {
        $okmek = DB::table('tb_inputberita')->get();
        return view ('admin.inputberita', ['okmek' => $okmek]);
    }

    public function inputportofolio() {
        return view ('admin.inputportofolio');
    }


    public function inputpendiri() {
        return view ('admin.inputpendiri');
    }

    public function inputlogo() {
        return view ('admin.inputlogo');
    }

    public function welcomeadmin() {
        return view ('admin.inputwelcome');
    }    

    public function inputvisimisi() {
        return view ('admin.inputvisimisi');
    }

    public function inputpembina() {
        return view ('admin.inputpembina');
    }

    public function inputpengurus() {
        return view ('admin.inputpengurus');
    }

    public function inputpengawas() {
        return view ('admin.inputpengawas');
    }

    public function inputfotokegiatan() {
        return view ('admin.inputfotokegiatan');
    }

    public function inputfotobangunan() {
        return view ('admin.inputfotobangunan');
    }

    public function inputkarir() {
        return view ('admin.inputkarir');
    }

    public function inputunitpendidikan() {
        return view ('admin.inputunitpendidikan');
    }

    public function inputunitkesejahteraan() {
        return view ('admin.inputunitkesejahteraan');
    }

    public function inputunitbisnis() {
        return view ('admin.inputunitbisnis');
    }


// FITUR EDIT

    public function listportofolio(){
        $okmek = DB::table('tb_portofolio')->get();
        return view('admin.listportofolio', ['okmek' => $okmek]);
    }

    public function listberita(){
        $okmek = DB::table('tb_inputberita')->get();
        return view('admin.listberita', ['okmek' => $okmek]);
    }

    public function editwelcomeadmin() {
        $okmek = DB::table('tb_welcome')->first();
        return view ('admin.editwelcome', ['okmek' => $okmek]);
    }

    public function editvisimisi() {
        $okmek = DB::table('tb_visimisi')->first();
        return view ('admin.editvisimisi', ['okmek' => $okmek]);
    }

    public function editpendiri() {
        $okmek = DB::table('tb_pendiri')->get();
        return view ('admin.editpendiri', ['okmek' => $okmek]);
    }

    public function editlogo() {
        $okmek = DB::table('tb_logo')->first();
        return view ('admin.editlogo', ['okmek' => $okmek]);
    }

    public function editpembina(){
        $okmek = DB::table('tb_pembina')->get();
        return view ('admin.editpembina', ['okmek' => $okmek]);
    }

    public function editpengurus(){
        $okmek = DB::table('tb_pengurus')->get();
        return view ('admin.editpengurus', ['okmek' => $okmek]);
    }

    public function editpengawas(){
        $okmek = DB::table('tb_pengawas')->get();
        return view ('admin.editpengawas', ['okmek' => $okmek]);
    }

    public function editfotokegiatan(){
        $okmek = DB::table('tb_fotokegiatan')->get();
        return view ('admin.editfotokegiatan', ['okmek' => $okmek]);
    }

    public function editfotobangunan(){
        $okmek = DB::table('tb_fotobangunan')->get();
        return view ('admin.editfotobangunan', ['okmek' => $okmek]);
    }

    public function editkarir(){
        $okmek = DB::table('tb_karir')->get();
        return view ('admin.editkarir', ['okmek' => $okmek]);
    }

    public function editunitpendidikan(){
        $okmek = DB::table('tb_unitpendidikan')->first();
        return view ('admin.editunitpendidikan', ['okmek' => $okmek]);
    }

    public function editunitkesejahteraan(){
        $okmek = DB::table('tb_unitkesejahteraan')->first();
        return view ('admin.editunitkesejahteraan', ['okmek' => $okmek]);
    }

    public function editunitbisnis(){
        $okmek = DB::table('tb_unitbisnis')->first();
        return view ('admin.editunitbisnis', ['okmek' => $okmek]);
    }

    
    // FITUR INSERT

    public function insertberita(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/berita', $file, $nama);
            DB::table('tb_inputberita')->insert([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'isi' => $request->isi,
                'foto' => $nama,
            ]);
            return redirect('/listberita')->with('success', 'Data berhasil ditambahkan');
 
    }

    public function insertportofolio(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/portofolio', $file, $nama);
            DB::table('tb_portofolio')->insert([
                'nama' => $request->nama,
                'foto' => $nama,
            ]);
            return redirect('/listportofolio')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertlogo(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/logo', $file, $nama);
            DB::table('tb_logo')->insert([
                'penjelasan' => $request->penjelasan,
                'foto' => $nama,
            ]);
            return redirect('/editlogo')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertpendiri(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/pendiri', $file, $nama);
            DB::table('tb_pendiri')->insert([
                'nama' => $request->nama,
                'foto' => $nama,
            ]);
            return redirect('/editpendiri')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertpembina(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/pembina', $file, $nama);
            DB::table('tb_pembina')->insert([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
                'foto' => $nama,
            ]);
            return redirect('/editpembina')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertpengurus(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/pengurus', $file, $nama);
            DB::table('tb_pengurus')->insert([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
                'foto' => $nama,
            ]);
            return redirect('/editpengurus')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertpengawas(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/pengawas', $file, $nama);
            DB::table('tb_pengawas')->insert([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
                'foto' => $nama,
            ]);
            return redirect('/editpengawas')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertwelcome(Request $request) {
            DB::table('tb_welcome')->insert([
                'isi' => $request->isi,
            ]);
            return redirect('/editwelcome')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertvisimisi(Request $request) {
            DB::table('tb_visimisi')->insert([
                'visi' => $request->visi,
                'misi' => $request->misi,
            ]);
            return redirect('/editvisimisi')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertfotokegiatan(Request $request) {
            $file = $request->file('foto');
            $nama1 = $file->getClientOriginalName();
            Storage::putFileAs('public/fotokegiatan', $file, $nama1);
            DB::table('tb_fotokegiatan')->insert([
                'nama' => $request->nama,
                'foto' => $nama1,
            ]);
            return redirect('/editfotokegiatan')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertfotobangunan(Request $request) {
            $file = $request->file('foto');
            $nama1 = $file->getClientOriginalName();
            Storage::putFileAs('public/fotobangunan', $file, $nama1);
            DB::table('tb_fotobangunan')->insert([
                'nama' => $request->nama,
                'foto' => $nama1,
            ]);
            return redirect('/editfotobangunan')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertkarir(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/karir', $file, $nama);
            DB::table('tb_karir')->insert([
                'lowongan' => $request->lowongan,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama,
            ]);
            return redirect('/editkarir')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertunitpendidikan(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/unitpendidikan', $file, $nama);
            DB::table('tb_unitpendidikan')->insert([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama,
            ]);
            return redirect('/editunitpendidikan')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertunitkesejahteraan(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/unitkesejahteraan', $file, $nama);
            DB::table('tb_unitkesejahteraan')->insert([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama,
            ]);
            return redirect('/editunitkesejahteraan')->with('success', 'Data berhasil ditambahkan');;
 
    }

    public function insertunitbisnis(Request $request) {
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/unitbisnis', $file, $nama);
            DB::table('tb_unitbisnis')->insert([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama,
            ]);
            return redirect('/editunitbisnis')->with('success', 'Data berhasil ditambahkan');;
 
    }


    // FITUR DELETE

    public function deleteberita($id) {
        DB::table('tb_inputberita')->where('id', $id)->delete();
        return redirect('/listberita')->with('success', 'Data berhasil dihapus');
    } 

    public function deleteportofolio($id) {
        DB::table('tb_portofolio')->where('id', $id)->delete();
        return redirect('/listportofolio')->with('success', 'Data berhasil dihapus');
    } 


    public function deletependiri($id) {
        DB::table('tb_pendiri')->where('id', $id)->delete();
        return redirect('/editpendiri')->with('success', 'Data berhasil dihapus');
    } 

    public function deletepembina($id) {
        DB::table('tb_pembina')->where('id', $id)->delete();
        return redirect('/editpembina')->with('success', 'Data berhasil dihapus');
    } 

    public function deletepengurus($id) {
        DB::table('tb_pengurus')->where('id', $id)->delete();
        return redirect('/editpengurus')->with('success', 'Data berhasil dihapus');
    }

    public function deletepengawas($id) {
        DB::table('tb_pengawas')->where('id', $id)->delete();
        return redirect('/editpengawas')->with('success', 'Data berhasil dihapus');
    }

    public function deletefotokegiatan($id) {
        DB::table('tb_fotokegiatan')->where('id', $id)->delete();
        return redirect('/editfotokegiatan')->with('success', 'Data berhasil dihapus');
    }

    public function deletefotobangunan($id) {
        DB::table('tb_fotobangunan')->where('id', $id)->delete();
        return redirect('/editfotobangunan')->with('success', 'Data berhasil dihapus');
    }

    public function deletekarir($id) {
        DB::table('tb_karir')->where('id', $id)->delete();
        return redirect('/editkarir')->with('success', 'Data berhasil dihapus');
    }

    public function deleteunitpendidikan($id) {
        DB::table('tb_unitpendidikan')->where('id', $id)->delete();
        return redirect('/editunitpendidikan')->with('success', 'Data berhasil dihapus');
    }

    public function deleteunitkesejahteraan($id) {
        DB::table('tb_unitkesejahteraan')->where('id', $id)->delete();
        return redirect('/editunitkesejahteraan')->with('success', 'Data berhasil dihapus');
    }

    public function deleteunitbisnis($id) {
        DB::table('tb_unitbisnis')->where('id', $id)->delete();
        return redirect('/editunitbisnis')->with('success', 'Data berhasil dihapus');
    }

    
// FITUR MEMBUKA EDIT

     public function editberita($id){
        $okmek = DB::table('tb_inputberita')->where('id',$id)->first();
        return view('admin.editberita', ['okmek' => $okmek]);
    }

    public function editkarirmodal($id){
        $okmek = DB::table('tb_karir')->where('id',$id)->first();
        return view('admin.editkarirmodal', ['okmek' => $okmek]);
    }



// FITUR UPDATE 
    public function updateberita(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/berita/', $file, $nama);
            DB::table('tb_inputberita')->where('id',$request->id)->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'isi' => $request->isi,
                'foto' => $nama,
            ]);
            return redirect('/listberita')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_inputberita')->where('id',$request->id)->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'isi' => $request->isi,
            ]);
            return redirect('/listberita')->with('success', 'Data berhasil diedit');;
        }
        
    }

    public function updatewelcome(Request $request){
            DB::table('tb_welcome')->where('id',$request->id)->update([
                'isi' => $request->isi,
            ]);
            return redirect('/editwelcome')->with('success', 'Data berhasil diedit');;
    }


    public function updatevisimisi(Request $request){
            DB::table('tb_visimisi')->where('id',$request->id)->update([
                'visi' => $request->visi,
                'misi' => $request->misi,
            ]);
            return redirect('/editvisimisi')->with('success', 'Data berhasil diedit');;
    }

    public function updatelogo(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/logo/', $file, $nama);
            DB::table('tb_logo')->where('id',$request->id)->update([
                'penjelasan' => $request->penjelasan,
                'foto' => $nama,
            ]);
            return redirect('/editlogo')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_logo')->where('id',$request->id)->update([
                'penjelasan' => $request->penjelasan,
            ]);
            return redirect('/editlogo')->with('success', 'Data berhasil diedit');;
        }
    }
        
    

    public function updatependiri(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/pendiri/', $file, $nama);
            DB::table('tb_pendiri')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'foto' => $nama,
            ]);
            return redirect('/editpendiri')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_pendiri')->where('id',$request->id)->update([
                'nama' => $request->nama,
            ]);
            return redirect('/editpendiri')->with('success', 'Data berhasil diedit');;
        }
        
    }

    public function updatepembina(Request $request){
        if($request->hasFile('foto')){
           $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/pembina/', $file, $nama);
            DB::table('tb_pembina')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
                'foto' => $nama,
            ]);
            return redirect('/editpembina')->with('success', 'Data berhasil diedit');; 
        }else{
            DB::table('tb_pembina')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
            ]);
            return redirect('/editpembina')->with('success', 'Data berhasil diedit');;
        }
        
    }

    public function updatepengurus(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/pengurus/', $file, $nama);
            DB::table('tb_pengurus')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
                'foto' => $nama,
            ]);
            return redirect('/editpengurus')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_pengurus')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
            ]);
            return redirect('/editpengurus')->with('success', 'Data berhasil diedit');;
        }
        
    }

    public function updatepengawas(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/pengawas', $file, $nama);
            DB::table('tb_pengawas')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
                'foto' => $nama,
            ]);
            return redirect('/editpengawas')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_pengawas')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
            ]);
            return redirect('/editpengawas')->with('success', 'Data berhasil diedit');;   
        }
        
    }

    public function updatefotokegiatan(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/fotokegiatan/', $file, $nama);
            DB::table('tb_fotokegiatan')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'foto' => $nama,
            ]);
            return redirect('/editfotokegiatan')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_fotokegiatan')->where('id',$request->id)->update([
                'nama' => $request->nama,
            ]);
            return redirect('/editfotokegiatan')->with('success', 'Data berhasil diedit');;
        }
        
    }

    public function updatefotobangunan(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/fotobangunan', $file, $nama);
            DB::table('tb_fotobangunan')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'foto' => $nama,
            ]);
            return redirect('/editfotobangunan')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_fotobangunan')->where('id',$request->id)->update([
                'nama' => $request->nama,
            ]);
            return redirect('/editfotobangunan')->with('success', 'Data berhasil diedit');;
        }
        
    }

    public function updatekarir(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/karir/', $file, $nama);
            DB::table('tb_karir')->where('id',$request->id)->update([
                'lowongan' => $request->lowongan,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama,
            ]);
            return redirect('/editkarir')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_karir')->where('id',$request->id)->update([
                'lowongan' => $request->lowongan,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect('/editkarir')->with('success', 'Data berhasil diedit');;
        }
       
    }

    public function updateunitpendidikan(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/unitpendidikan', $file, $nama);
            DB::table('tb_unitpendidikan')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama,
            ]);
            return redirect('/editunitpendidikan')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_unitpendidikan')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect('/editunitpendidikan')->with('success', 'Data berhasil diedit');;
        }
        
    }

    public function updateunitkesejahteraan(Request $request){
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/unitkesejahteraan/', $file, $nama);
            DB::table('tb_unitkesejahteraan')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama,
            ]);
            return redirect('/editunitkesejahteraan')->with('success', 'Data berhasil diedit');;
        }else{
                DB::table('tb_unitkesejahteraan')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect('/editunitkesejahteraan')->with('success', 'Data berhasil diedit');;   
        }
        
    }

    public function updateunitbisnis(Request $request){
         if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/unitbisnis/', $file, $nama);
            DB::table('tb_unitbisnis')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama,
            ]);
            return redirect('/editunitbisnis')->with('success', 'Data berhasil diedit');;
        }else{
            DB::table('tb_unitbisnis')->where('id',$request->id)->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect('/editunitbisnis')->with('success', 'Data berhasil diedit');;
        }
        
    }
}

