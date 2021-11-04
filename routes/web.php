<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebController::class, 'welcome']);


Route::get('/login', [AuthController::class, 'login']);
Route::post('/cekLogin', [AuthController::class, 'cekLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
// Route::get('/berita', function () {
//     return view('berita');

// });

Route::middleware(['Admin'])->group(function () {
	Route::get('/home', [AboutController::class, 'home']);
	Route::get('/inputberita', [AboutController::class, 'inputberita']);
	Route::get('/inputportofolio', [AboutController::class, 'inputportofolio']);
	Route::get('/listberita', [AboutController::class, 'listberita']);
	Route::get('/listportofolio', [AboutController::class, 'listportofolio']);
	Route::get('/editberita/{id}', [AboutController::class, 'editberita']);
	Route::get('/editkarirmodal/{id}', [AboutController::class, 'editkarirmodal']);
	
//delete
	Route::get('/deleteberita/{id}', [AboutController::class, 'deleteberita']);
	Route::get('/deleteportofolio/{id}', [AboutController::class, 'deleteportofolio']);
	Route::get('/deletependiri/{id}', [AboutController::class, 'deletependiri']);
	Route::get('/deletepembina/{id}', [AboutController::class, 'deletepembina']);
	Route::get('/deletepengawas/{id}', [AboutController::class, 'deletepengawas']);
	Route::get('/deletepengurus/{id}', [AboutController::class, 'deletepengurus']);
	Route::get('/deletefotokegiatan/{id}', [AboutController::class, 'deletefotokegiatan']);
	Route::get('/deletefotobangunan/{id}', [AboutController::class, 'deletefotobangunan']);
	Route::get('/deletekarir/{id}', [AboutController::class, 'deletekarir']);
	
//Input dan edit
	Route::get('/inputwelcome', [AboutController::class, 'welcomeadmin']);
	Route::get('/editwelcome', [AboutController::class, 'editwelcomeadmin']);
	Route::get('//inputvisimisi', [AboutController::class, 'inputvisimisi']);
	Route::get('/editvisimisi', [AboutController::class, 'editvisimisi']);
	Route::get('//inputlogo', [AboutController::class, 'inputlogo']);
	Route::get('/editlogo', [AboutController::class, 'editlogo']);
	Route::get('/inputpendiri', [AboutController::class, 'inputpendiri']);
	Route::get('/editpendiri', [AboutController::class, 'editpendiri']);
	Route::get('/inputpembina', [AboutController::class, 'inputpembina']);
	Route::get('/editpembina', [AboutController::class, 'editpembina']);
	Route::get('/inputpengurus', [AboutController::class, 'inputpengurus']);
	Route::get('/editpengurus', [AboutController::class, 'editpengurus']);
	Route::get('/inputpengawas', [AboutController::class, 'inputpengawas']);
	Route::get('/editpengawas', [AboutController::class, 'editpengawas']);
	Route::get('/inputfotokegiatan', [AboutController::class, 'inputfotokegiatan']);
	Route::get('/editfotokegiatan', [AboutController::class, 'editfotokegiatan']);
	Route::get('/inputfotobangunan', [AboutController::class, 'inputfotobangunan']);
	Route::get('/editfotobangunan', [AboutController::class, 'editfotobangunan']);
	Route::get('/inputkarir', [AboutController::class, 'inputkarir']);
	Route::get('/editkarir', [AboutController::class, 'editkarir']);
	Route::get('/inputunitpendidikan', [AboutController::class, 'inputunitpendidikan']);
	Route::get('/editunitpendidikan', [AboutController::class, 'editunitpendidikan']);
	Route::get('/inputunitkesejahteraan', [AboutController::class, 'inputunitkesejahteraan']);
	Route::get('/editunitkesejahteraan', [AboutController::class, 'editunitkesejahteraan']);
	Route::get('/inputunitbisnis', [AboutController::class, 'inputunitbisnis']);
	Route::get('/editunitbisnis', [AboutController::class, 'editunitbisnis']);

//insert

	Route::post('/insertwelcome', [AboutController::class, 'insertwelcome']);
	Route::post('/insertvisimisi', [AboutController::class, 'insertvisimisi']);
	Route::post('/insertlogo', [AboutController::class, 'insertlogo']);
	Route::post('/insertpendiri', [AboutController::class, 'insertpendiri']);
	Route::post('/insertberita', [AboutController::class, 'insertberita']);
	Route::post('/insertportofolio', [AboutController::class, 'insertportofolio']);
	Route::post('/insertpembina', [AboutController::class, 'insertpembina']);
	Route::post('/insertpengurus', [AboutController::class, 'insertpengurus']);
	Route::post('/insertpengawas', [AboutController::class, 'insertpengawas']);
	Route::post('/insertfotokegiatan', [AboutController::class, 'insertfotokegiatan']);
	Route::post('/insertfotobangunan', [AboutController::class, 'insertfotobangunan']);
	Route::post('/insertkarir', [AboutController::class, 'insertkarir']);
	Route::post('/insertunitpendidikan', [AboutController::class, 'insertunitpendidikan']);
	Route::post('/insertunitkesejahteraan', [AboutController::class, 'insertunitkesejahteraan']);
	Route::post('/insertunitbisnis', [AboutController::class, 'insertunitbisnis']);

//update	
	Route::post('/updateberita', [AboutController::class, 'updateberita']);
	Route::post('/updatewelcome', [AboutController::class, 'updatewelcome']);
	Route::post('/updatevisimisi', [AboutController::class, 'updatevisimisi']);
	Route::post('/updatelogo', [AboutController::class, 'updatelogo']);
	Route::post('/updatependiri', [AboutController::class, 'updatependiri']);
	Route::post('/updatepembina', [AboutController::class, 'updatepembina']);
	Route::post('/updatepengurus', [AboutController::class, 'updatepengurus']);
	Route::post('/updatepengawas', [AboutController::class, 'updatepengawas']);
	Route::post('/updatefotokegiatan', [AboutController::class, 'updatefotokegiatan']);
	Route::post('/updatefotobangunan', [AboutController::class, 'updatefotobangunan']);
	Route::post('/updatekarir', [AboutController::class, 'updatekarir']);
	Route::post('/updateunitpendidikan', [AboutController::class, 'updateunitpendidikan']);
	Route::post('/updateunitkesejahteraan', [AboutController::class, 'updateunitkesejahteraan']);
	Route::post('/updateunitbisnis', [AboutController::class, 'updateunitbisnis']);
});


//website informasi
Route::get('/berita', [WebController::class, 'berita']);
Route::get('/detailberita/{id}', [WebController::class, 'detailberita']);
Route::get('/visimisi', [WebController::class, 'visimisi']);
Route::get('/logo', [WebController::class, 'logo']);
Route::get('/pendiri', [WebController::class, 'pendiri']);
Route::get('/pembina', [WebController::class, 'pembina']);
Route::get('/pengurus', [WebController::class, 'pengurus']);
Route::get('/pengawas', [WebController::class, 'pengawas']);
Route::get('/fotokegiatan', [WebController::class, 'fotokegiatan']);
Route::get('/fotobangunan', [WebController::class, 'fotobangunan']);
Route::get('/karir', [WebController::class, 'karir']);
Route::get('/detailkarir/{id}', [WebController::class, 'detailkarir']);
Route::get('/unitpendidikan', [WebController::class, 'unitpendidikan']);
Route::get('/unitkesejahteraan', [WebController::class, 'unitkesejahteraan']);
Route::get('/unitbisnis', [WebController::class, 'unitbisnis']);



