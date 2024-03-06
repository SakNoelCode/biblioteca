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
Route::get('/prestamos-pendientes/download',[ReportesControlller::class,'prestamosPendientesDownload'])->name('prestamos-pendientes.download');
Route::get('/prestamos-vencidos/download',[ReportesControlller::class,'prestamosVencidosDownload'])->name('prestamos-vencidos.download');
Route::get('/separatas/download',[ReportesControlller::class,'separatasDownload'])->name('separatas.download');
Route::get('/revistas/download',[ReportesControlller::class,'revistasDownload'])->name('revistas.download');
Route::get('/tesis/download',[ReportesControlller::class,'tesisDownload'])->name('tesis.download');
Route::get('/libros/download',[ReportesControlller::class,'librosDownload'])->name('libros.download');
