<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');

})->name('dashboard');

//İletişim
Route::post('/iletisim',[\App\Http\Controllers\ContactController::class ,'create'])->name('contact.create');

Route::prefix('panel')->middleware(['auth:sanctum', 'verified'])->group(function (){

    //Dosya klasörleme yönlendirmeleri
    Route::get('/dosyalar',[\App\Http\Controllers\FolderAndDataController::class ,'FolderIndex'])->name('fad.folder.index');
    Route::post('/dosyalar',[\App\Http\Controllers\FolderAndDataController::class ,'FolderCreate'])->name('fad.folder.create');

    //Verilerin CRUD yönlendirmeleri
    Route::get('/veriler',[\App\Http\Controllers\FolderAndDataController::class ,'DataIndex'])->name('fad.data.index');

});


