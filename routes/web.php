<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvinitController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\SeatController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::view('/','welcome');


    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');


Route::prefix('/admin/')->controller(SeatController::class)->group(function(){

Route::get('seat','index')->name('seat');
Route::get('formConfirm','formConfirm')->name('form.confirm');
Route::post('formConfirm','formConfirmSort')->name('form.confirm.sort');
Route::post('seat/numberColum','numberColum')->name('number.column');
Route::get('seat-export', 'export')->name('seat.export');
Route::post('seat-import', 'import')->name('seat.import');
Route::post('sort','sort')->name('seat.sort');
Route::post('search','search')->name('seat.search');


});

Route::prefix('/admin/')->controller(InvinitController::class)->group(function(){
Route::get('invinit','index')->name('invinit');
Route::get('formInvinit','formInvinit')->name('form.invinit');
Route::post('formInvinit','formInvinitSort')->name('forminvinit.sort');

});

Route::prefix('/admin/')->controller(QrCodeController::class)->group(function(){

    Route::get('qrcode/{id}', 'generate')->name('generate');
    });