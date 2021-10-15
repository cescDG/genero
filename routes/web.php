<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ReporteController;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get("reporte/dependencia",  [ReporteController::class, 'dependencia'])->name('reportes.dependencia');
    Route::get("reporte/pregunta",  [ReporteController::class, 'pregunta'])->name('reportes.pregunta');
    Route::get("reporte/individual",  [ReporteController::class, 'individual'])->name('reportes.individual');
    Route::get('getdireccion/{dependencia_id}', [ReporteController::class, 'obtenerDireccion']);
    Route::get('getdepartamento/{direccion_id}', [ReporteController::class, 'obtenerDepto']);
    route::post("pdf/dependencia", [ReporteController::class, "pdfDependencia"])->name('pdf.dependencia');
    Route::resources([
        'encuesta' => QuizController::class,
        'reportes' => ReporteController::class
    ]);
});
