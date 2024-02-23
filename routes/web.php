<?php

use App\Http\Controllers\ReportesControlller;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/prestamistas/download',[ReportesControlller::class,'prestamistasDownload'])->name('prestamistas.download');
Route::get('/prestamos/download',[ReportesControlller::class,'prestamosDownload'])->name('prestamos.download');
Route::get('/prestamos-no-entregados/download',[ReportesControlller::class,'prestamosNoEntregadosDownload'])->name('prestamos-no-entregados.download');
