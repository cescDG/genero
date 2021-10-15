<?php

namespace App\Http\Controllers;
use App\Models\Preguntas;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Direccion;
use App\Models\Departamento;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function dependencia(){

        $Dependencia = Arr::pluck(\App\Models\Dependencia::all(), "Nombre","id_Dependencia");
        $Direccion = Arr::pluck(\App\Models\Direccion::all(), "Nombre","id_Direccion");
        $Departamento = Arr::pluck(\App\Models\Departamento::all(), "Nombre","id_Departamento");

        return view('reportes.dependencia', compact('Dependencia', 'Direccion', 'Departamento'));
    }

    public function obtenerDireccion(Request $request){
        return Direccion::where('id_Dependencia',$request->dependencia_id)->get();
    }

    public function obtenerDepto(Request $request){
        return Departamento::where('id_Direccion',$request->direccion_id)->get();
    }

    public function pdfDependencia(Request $request){

       //dd($request->all());
       $pdf = PDF::loadView('PDF.dependencia');
       return $pdf->stream('dependencia.pdf');
    }
    public function pregunta()
    {
       $preguntas= Preguntas::paginate(5);
        return view('reportes.pregunta', compact('preguntas'));
    }
}



