<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;

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

Route::get('/insertdosen',[DosenController::class,'insert']);
Route::get('/selectdosen',[DosenController::class,'select']);
Route::get('/updatedosen',[DosenController::class,'update']);
Route::get('/deletedosen',[DosenController::class,'delete']);

Route::get('/insertmahasiswa',[MahasiswaController::class,'insert']);
Route::get('/selectmahasiswa',[MahasiswaController::class,'select']);
Route::get('/updatemahasiswa',[MahasiswaController::class,'update']);
Route::get('/deletemahasiswa',[MahasiswaController::class,'delete']);

Route::get('/insertmatkul',[MatkulController::class,'insert']);
Route::get('/selectmatkul',[MatkulController::class,'select']);
Route::get('/updatematkul',[MatkulController::class,'update']);
Route::get('/deletematkul',[MatkulController::class,'delete']);

Route::get('/', function () {
    return view('master');
});
Route::get('/dosen', function () {
    $dosen = [
        "Joko Kendil",
        "Soekarno",
        "Budi",
        "Ujang",
        "Asep",
        "Suyanto",
        "Jaka",
        "Harto",
        "Gus Mitah",
        "Jajang"
    ];
    return view('dosen')->with('dosen',$dosen);
});
Route::get('/mahasiswa', function () {
    $mahasiswa = [
        "Atep",
        "Adhi",
        "Adlam",
        "Bimo",
        "Bembi",
        "Hanna",
        "Caca",
        "Riska",
        "Wahyu",
        "Alda"
    ];
    return view('mahasiswa')->with('mahasiswa',$mahasiswa);
});
Route::get('/matakuliah', function () {
    $matakuliah = [
        "PBM",
        "PBW",
        "FPW",
        "Datmin",
        "Statprob",
        "Aljabar",
        "Basis data",
        "Blockchain",
        "Kalkulus",
        "Technopreuneur"
    ];
    return view('matakuliah')->with('matakuliah',$matakuliah);
});


