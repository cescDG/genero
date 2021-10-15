<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Direccion;
use App\Models\Departamento;
use App\Models\Preguntas;
use App\Models\Respuestas;
use App\Models\ServidorPulbicoDetail;

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
           $respuestas = [];
            $usuarios = ServidorPulbicoDetail::where('id_Departamento',$request->departamento)->get();
            foreach ($usuarios as $usuario) {
                //dd($usuario->user->id);
                $res = Respuestas::where('user_id',$usuario->user->id)->get();
                if(!$res->isEmpty()){
                    array_push($respuestas,$res);
                }
            }
           
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

    public function individual()
    {
       dd("holi");
    }

}



