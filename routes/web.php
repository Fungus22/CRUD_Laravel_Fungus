<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FungController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo "Blank file";
});

Route::get('/blank', function() {
    echo "Blank File";
});

Route::get('/index', [FungController::class, "index"])->name("fung.index");
Route::delete('/index/{id}', [FungController::class, "destroy"]);

Route::get('/index/tambah', [FungController::class, "tambah"])->name("fung.tambah");
Route::post('/index', [FungController::class, "menambah"])->name("fung.menambah");

Route::get('/index/{id}', [FungController::class, "edit"])->name("fung.edit");
Route::put('/index/{id}', [FungController::class, "memperbarui"])->name("fung.memperbarui");