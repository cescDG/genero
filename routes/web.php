<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\LibrosController;
use \App\Http\Controllers\SolicitudesController;
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
    return view('home');
});


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get("reporte/dependencia",  [ReporteController::class, 'dependencia'])->name('reportes.dependencia');
    Route::get("reporte/pregunta",  [ReporteController::class, 'pregunta'])->name('reportes.pregunta');
    Route::get("reporte/preguntaG",  [ReporteController::class, 'preguntaG'])->name('reportes.preguntaG');
    Route::get("reporte/individual",  [ReporteController::class, 'individual'])->name('reportes.individual');
    Route::get("reporte/sinRegistro",  [ReporteController::class, 'sinRegistro'])->name('reportes.sinRegistro');
    Route::get("reporte/sinRegistroExp",  [ReporteController::class, 'sinRegistroExp'])->name('reportes.sinRegistroExp');
    Route::get('getdireccion/{dependencia_id}', [ReporteController::class, 'obtenerDireccion']);
    Route::get('getDep/{id}', [ReporteController::class, 'getDep']);
    Route::get('getDepG', [ReporteController::class, 'getDepG']);
    Route::get('getdepartamento/{direccion_id}', [ReporteController::class, 'obtenerDepto']);
    route::post("pdf/dependencia", [ReporteController::class, "pdfDependencia"])->name('pdf.dependencia');
    Route::GET('verReporte/{id}', 'App\Http\Controllers\ReporteController@verReporte')->name('verReporte');
    Route::get('verGrafica/{id}', 'App\Http\Controllers\ReporteController@verGrafica')->name('verGrafica');
    Route::get('verGrafica2/{id}', 'App\Http\Controllers\ReporteController@verGrafica2')->name('verGrafica2');
    Route::get('verGrafica3/{id}', 'App\Http\Controllers\ReporteController@verGrafica3')->name('verGrafica3');
    Route::get('verGrafica4/{id}', 'App\Http\Controllers\ReporteController@verGrafica4')->name('verGrafica4');
    Route::get('verGrafica5/{id}', 'App\Http\Controllers\ReporteController@verGrafica5')->name('verGrafica5');
    Route::get('imprimir/{id}', [ReporteController::class, 'generarExcel']);
    Route::get('solicitar/{id}', 'App\Http\Controllers\SolicitudesController@solicitar')->name('solicitar');
    Route::get('solicitudes', 'App\Http\Controllers\LibrosController@solicitudes')->name('solicitudes');
    Route::get('aprobar/{id}', 'App\Http\Controllers\LibrosController@aprobar')->name('aprobar');
    Route::get('pdf/{id}', 'App\Http\Controllers\LibrosController@pdf')->name('pdf');
    Route::get('busquedaLibro/{id}', 'App\Http\Controllers\LibrosController@busquedaLibro')->name('busquedaLibro');
    Route::get('getLibros', 'App\Http\Controllers\LibrosController@getLibros')->name('getLibros');
    Route::get('verLibrosAprobar/{id}', 'App\Http\Controllers\LibrosController@verLibrosAprobar')->name('verLibrosAprobar');

    Route::resources([
        'encuesta' => QuizController::class,
        'reportes' => ReporteController::class,
        'libros' => LibrosController::class,
        'solicitud' => SolicitudesController::class,
        'datosG' => \App\Http\Controllers\DatosGeneralesUController::class
    ]);

    Route::get('/logout', function(){
        Auth::logout();
        return Redirect::to('login');
    });
});
