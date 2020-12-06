<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use Symfony\Component\Console\Input\Input;

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\LoginController;

Route::get("/login", [UtamaController::class, "login"]);
Route::get("/daftar", [UtamaController::class, "daftar"]);
Route::get("/home", [UtamaController::class, "home"]);
Route::get("/artikel", [UtamaController::class, "artikel"]);
Route::get("/medis", [UtamaController::class, "medis"]);
Route::get("/info_kesehatan", [UtamaController::class, "info_kesehatan"]);
Route::get("/life", [UtamaController::class, "life"]);
Route::get("/about", [UtamaController::class, "about"]);

Route::get("/pendaftaran/tambah", [PendaftaranController::class, "tambah"])->name("pendaftaran_tambah");
Route::post("/pendaftaran/proses", [PendaftaranController::class, "proses"])->name("pendaftaran_proses");

Route::get("/login/tambah", [LoginController::class, "tambah"])->name("login_tambah");
Route::post("/login/proses", [LoginController::class, "proses"])->name("login_proses");
