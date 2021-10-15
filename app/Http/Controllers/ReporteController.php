<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Direccion;
use App\Models\Departamento;
use App\Models\Preguntas;
use App\Models\Respuestas;

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
        //dd($request->departamento);
       
       if($request->departamento){
           /*
            $preguntas = Preguntas::whereHas('user',function($q) use($array_servicios){
                return $q->where("servicio_id",$array_servicios);
            })->where('estatus_ticket_id', 4)->get();*/
            $respuestas = Respuestas::with(["user" => function ($q) {
                $q->with(["servidorPublico" => function ($q) {
                    $q->with('departamento', function ($q) {
                        return $q->where('id_Departamento', 150);
                    });
                }]);

            }])->get();
            dd($respuestas);

       }elseif($request->direccion){
         dd("preguntas por direccion");
       }else{
         dd("preguntas por dependencia");
       }
       $pdf = PDF::loadView('PDF.dependencia');
       return $pdf->stream('dependencia.pdf');
    }

    public function pregunta()
    {
       $preguntas= Preguntas::paginate(5);
        return view('reportes.pregunta', compact('preguntas'));
    }
    
}



