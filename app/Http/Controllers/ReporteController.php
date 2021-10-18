<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Direccion;
use App\Models\Departamento;
use App\Models\Dependencia;
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
        $preguntas = Preguntas::all();
        $collection1 = collect([]);
        $collection2 = collect([]);
        $collection3 = collect([]);
        $collection4 = collect([]);
        $respuestas = [];
        $si = 0;
        $no = 0;
        $alg = 0;
        $desco = 0;
        if($request->departamento){
            $ubicacion = Departamento::whereidDepartamento($request->departamento)->first();
            $usuarios = ServidorPulbicoDetail::where('id_Departamento',$request->departamento)->get();

        }elseif($request->direccion){
            $ubicacion = Direccion::whereidDireccion($request->direccion)->first();
            $usuarios = ServidorPulbicoDetail::where('id_Direccion',$request->direccion)->get();

        }elseif($request->dependencia){
            $ubicacion = Departamento::whereidDependencia($request->dependencia)->first();
            $usuarios = ServidorPulbicoDetail::where('id_Dependencia',$request->dependencia)->get();

        }

        foreach ($usuarios as $usuario) {
            if($usuario->user){
                $res = Respuestas::where('user_id',$usuario->user->id)->get();
                if(!$res->isEmpty()){
                    array_push($respuestas,$res);
                }
            }
        }

        foreach ($respuestas as $respuesta) {
            foreach ($respuesta as $item) {
                if($item->respuesta == "A"){
                    $si +=1;
                    $collection1->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                }elseif($item->respuesta == "B"){
                    $no +=1;
                    $collection2->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                }elseif ($item->respuesta == "C") {
                    $alg +=1;
                    $collection3->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                }elseif($item->respuesta == "D"){
                    $desco +=1;
                    $collection4->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                }
            }

        }

        $sumaA = $collection1->pluck('id_pregunta')->countBy();
        $sumaB = $collection2->pluck('id_pregunta')->countBy();
        $sumaC = $collection3->pluck('id_pregunta')->countBy();
        $sumaD = $collection4->pluck('id_pregunta')->countBy();
        $datas['si']= $si;
        $datas['no']= $no;
        $datas['alg']= $alg;
        $datas['desco']= $desco;
        $pdf = PDF::loadView('PDF.dependencia', compact('preguntas','sumaA','sumaB','sumaC','sumaD','ubicacion','si','no','alg','desco'));
        return $pdf->stream('dependencia.pdf');

    }

    public function pregunta()
    {
        $Dependencia = Arr::pluck(\App\Models\Dependencia::all(), "Nombre","id_Dependencia");
    //    $preguntas= Preguntas::paginate(5);
        return view('reportes.pregunta', compact('Dependencia'));
    }

    public function individual()
    {
      $usuarios = ServidorPulbicoDetail::where('Estado',1)->get();

       return view('reportes.individual', compact('usuarios'));
    }


    public function getDep($id){


        $collection1 = collect([]);
        $collection2 = collect([]);
        $collection3 = collect([]);
        $collection4 = collect([]);
        $respuestas = [];

        $ubicacion = Dependencia::whereidDependencia($id)->first();

        $preguntas = Preguntas::all();
        $usuarios = ServidorPulbicoDetail::where('id_Dependencia',$ubicacion->id_Dependencia)->get();

        foreach ($usuarios as $usuario) {
            if($usuario->user){
                $res = Respuestas::where('user_id',$usuario->user->id)->get();
                if(!$res->isEmpty()){
                    array_push($respuestas,$res);
                }
            }
        }

        foreach ($respuestas as $respuesta) {
            foreach ($respuesta as $item) {
                if($item->respuesta == "A"){

                    $collection1->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                }elseif($item->respuesta == "B"){

                    $collection2->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                }elseif ($item->respuesta == "C") {

                    $collection3->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                }elseif($item->respuesta == "D"){

                    $collection4->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                }
            }

        }

        $sumaA = $collection1->pluck('id_pregunta')->countBy();
        $sumaB = $collection2->pluck('id_pregunta')->countBy();
        $sumaC = $collection3->pluck('id_pregunta')->countBy();
        $sumaD = $collection4->pluck('id_pregunta')->countBy();

        return view('reportes.show', compact('preguntas','sumaA','sumaB','sumaC','sumaD','ubicacion'));


    }


    public function verReporte($id){
        $idUs = $id;
        $reporte = Respuestas::where('user_id', $idUs)->get();
        $si = 0;
        $no = 0;
        $alg = 0;
        $desco = 0;

        foreach ($reporte as $repo){
            if($repo->respuesta == 'A'){
                $si = $si +1;
            }
            if($repo->respuesta == 'B'){
                $no = $no +1;
            }
            if($repo->respuesta == 'C'){
                $alg = $alg +1;
            }
            if($repo->respuesta == 'D'){
                $desco = $desco +1;
            }
        }

        $datas['si']= $si;
        $datas['no']= $no;
        $datas['alg']= $alg;
        $datas['desco']= $desco;

        return view('reportes.individualUs', compact('reporte','si','no','alg','desco','datas'));
    }
}



