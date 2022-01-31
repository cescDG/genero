<?php

namespace App\Http\Controllers;


use App\Exports\ExpedienteExport;
use App\Exports\SinRegistroExcelExport;
use App\Models\DatosGeneralesU;
use App\Models\Sexo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Direccion;
use App\Models\Departamento;
use App\Models\Dependencia;
use App\Models\Preguntas;
use App\Models\Respuestas;
use App\Models\ServidorPulbicoDetail;
use App\Exports\DependenciaExport;
use Maatwebsite\Excel\Facades\Excel;
use Jenssegers\Date\Date;
use PhpParser\Node\Stmt\DeclareDeclare;


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
        $Departamento = Arr::pluck(\App\Models\Departamento::all(), "nombre_completo","id_Departamento");

        return view('reportes.dependencia', compact('Dependencia', 'Direccion', 'Departamento'));
    }

    public function obtenerDireccion(Request $request){
        return Direccion::where('id_Dependencia',$request->dependencia_id)->get();
    }

    public function obtenerDepto(Request $request){
        return Departamento::where('id_Direccion',$request->direccion_id)->get();
    }

    public function pdfDependencia(Request $request){
        $timestam = date('Y-m-d H:i:s');
        date_default_timezone_set('America/Mexico_City');
               $dia = date('Y-M-w');
        $fDia = date('d');
        $fMes =  Date::now()->format('F');
        $fAnio = date('Y');

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
            $ubicacion = Dependencia::whereidDependencia($request->dependencia)->first();
            $usuarios = ServidorPulbicoDetail::where('id_Dependencia',$request->dependencia)->get();

        }

        foreach ($usuarios as $usuario) {
            if($usuario->user){
                $res = Respuestas::where('user_rfc',$usuario->user->rfc)->get();
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


        $pdf = PDF::loadView('PDF.dependencia', compact('preguntas','sumaA','sumaB','sumaC','sumaD','ubicacion','si','no','alg','desco','dia','fAnio','fDia','fMes'));
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
        $usuarioss = ServidorPulbicoDetail::all();

        $usuarios = [];
        foreach ($usuarioss as $us){
            if($us->user){
                $respuestas = Respuestas::where('user_rfc', $us->user->rfc)->first();
                if($respuestas){
                    array_push($usuarios,$us);
                }
            }
        }
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
                $res = Respuestas::where('user_rfc',$usuario->user->rfc)->get();
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

        $genero = false;
        $genero_id = 0;
        return view('reportes.show', compact('preguntas','sumaA','sumaB','sumaC','sumaD','ubicacion','id','genero','genero_id'));
    }


    public function generarExcel($id){


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
                $res = Respuestas::where('user_rfc',$usuario->user->rfc)->get();
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

        return Excel::download(new DependenciaExport($sumaA, $sumaB, $sumaC, $sumaD, $ubicacion,$preguntas ), "dependencias.xlsx");


    }

    public function verReporte($id){
      //  dd($user->rfc);

        $usuarios = ServidorPulbicoDetail::find($id);
    //    dd($usuarios);
        $reporte = Respuestas::where('user_rfc', $usuarios->N_Usuario)->get();
//dd($reporte);
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

    public function sinRegistro(){
        $timestam = date('Y-m-d H:i:s');
        date_default_timezone_set('America/Mexico_City');
        $dia = date('Y-M-w');
        $fDia = date('d');
        $fMes =  Date::now()->format('F');
        $fAnio = date('Y');
        $usuarioss = ServidorPulbicoDetail::orderby('id_Direccion', 'asc')->orderby('id_Departamento', 'asc')->where('Estado',1)->get();

        $usuarios = [];
        foreach ($usuarioss as $us){
            if($us->user){
                $respuestas = Respuestas::where('user_rfc', $us->user->rfc)->first();
                if(!$respuestas){
                    array_push($usuarios,$us);
                }
            }
        }
        $pdf = PDF::loadView('PDF.sinR', compact('usuarios','dia','fDia','fMes','fAnio'));
        return $pdf->stream('sinRegistro.pdf');
    }

    public function sinRegistroExp(){
        $timestam = date('Y-m-d H:i:s');
        date_default_timezone_set('America/Mexico_City');
        $dia = date('Y-M-w');
        $fDia = date('d');
        $fMes =  Date::now()->format('F');
        $fAnio = date('Y');
        $usuarioss = ServidorPulbicoDetail::orderby('id_Direccion', 'asc')->orderby('id_Departamento', 'asc')->where('Estado',1)->get();

        $usuarios = [];
        foreach ($usuarioss as $us){
            if($us->user){
                $respuestas = Respuestas::where('user_rfc', $us->user->rfc)->first();
                if(!$respuestas){
                    array_push($usuarios,$us);
                }
            }
        }
        return Excel::download(new SinRegistroExcelExport($usuarios), "SinRegistro.xlsx");
    }


    public function verGrafica($id)
    {
        $datos = explode("-", $id);
        $id = $datos[0];
        $genero = $datos[1];
        $genero_id = $datos[2];

        $collection1 = collect([]);
        $collection2 = collect([]);
        $collection3 = collect([]);
        $collection4 = collect([]);
        $respuestas = [];

        $ubicacion = Dependencia::whereidDependencia($id)->first();

        $preguntas = Preguntas::all();

        if ($genero == 1){
            $usuariosDep = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
            foreach ($usuariosDep as $uDep){
                $usGeneroG = DatosGeneralesU::where('sexo', $genero_id)->where('rfc_usuario',$uDep->N_Usuario)->first();
                if ($usGeneroG){
                    $usGenero[] = $usGeneroG;
                }
            }
            foreach ($usGenero as $usG){
                $usuarioss = ServidorPulbicoDetail::where('N_Usuario',$usG->rfc_usuario)->first();
                $usuarios[] = $usuarioss;
            }
        }else{
            $usuarios = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
        }


        foreach ($usuarios as $usuario) {
            if ($usuario->user) {
                $res = Respuestas::where('user_rfc', $usuario->user->rfc)->get();
                if (!$res->isEmpty()) {
                    array_push($respuestas, $res);
                }
            }
        }

        foreach ($respuestas as $respuesta) {
            foreach ($respuesta as $item) {
                if ($item->respuesta == "A") {

                    $collection1->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                } elseif ($item->respuesta == "B") {

                    $collection2->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "C") {

                    $collection3->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "D") {

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
         $siP1 = 0;
         $noP1 = 0;
         $alP1 = 0;
         $descoP1 = 0;

         foreach ($preguntas as $pregunta){
             foreach ($sumaA as $key => $value){
                 if ($key == $pregunta->id){
                     if ($key == $pregunta->id){
                         //dd($value);
                         if (!empty($value)){
                             $sii = $value;
                         }else{
                             $sii = 0;
                         }
                         if($pregunta->id == 1){
                             $siP1 = $sii;
                         }
                        if($pregunta->id == 2){
                            $siP2 = $sii;
                         //   dd($siP2);
                        }
                        if($pregunta->id == 3){
                            $siP3 = $sii;
                        }
                        if($pregunta->id == 4){
                            $siP4 = $sii;
                        }
                       if($pregunta->id == 5){
                           $siP5 = $sii;
                       }

                       if($pregunta->id == 6){
                           $siP6 = $sii;
                       }

                       if($pregunta->id == 7){
                           $siP7 = $sii;
                       }

                       if($pregunta->id == 8){
                           $siP8 = $sii;
                       }

                       if($pregunta->id == 9){
                           $siP9 = $sii;
                       }
                     }
                 }
             }
         }

        foreach ($preguntas as $pregunta){
            foreach ($sumaB as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $noo = $value;
                        }else{
                            $noo = 0;
                        }
                        if($pregunta->id == 1){
                            $noP1 = $noo;
                        }
                        if($pregunta->id == 2){
                            $noP2 = $noo;
                        }
                        if($pregunta->id == 3){
                            $noP3 = $noo;
                        }
                        if($pregunta->id == 4){
                            $noP4 = $noo;
                        }
                        if($pregunta->id == 5){
                            $noP5 = $noo;
                        }
                        if($pregunta->id == 6){
                            $noP6 = $noo;
                        }
                        if($pregunta->id == 7){
                            $noP7 = $noo;
                        }
                        if($pregunta->id == 8){
                            $noP8 = $noo;
                        }
                        if($pregunta->id == 9){
                            $noP9 = $noo;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaC as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $all = $value;
                        }else{
                            $all = 0;
                        }
                        if($pregunta->id == 1){
                            $alP1 = $all;
                        }
                        if($pregunta->id == 2){
                            $alP2 = $all;
                        }
                        if($pregunta->id == 3){
                            $alP3 = $all;
                        }
                        if($pregunta->id == 4){
                            $alP4 = $all;
                        }
                        if($pregunta->id == 5){
                            $alP5 = $all;
                        }
                        if($pregunta->id == 6){
                            $alP6 = $all;
                        }
                        if($pregunta->id == 7){
                            $alP7 = $all;
                        }
                        if($pregunta->id == 8){
                            $alP8 = $all;
                        }
                        if($pregunta->id == 9){
                            $alP9 = $all;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaD as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $dess = $value;
                        }else{
                            $dess = 0;
                        }
                        if($pregunta->id == 1){
                            $descoP1 = $dess;
                        }
                        if($pregunta->id == 2){
                            $descoP2 = $dess;
                        }
                        if($pregunta->id == 3){
                            $descoP3 = $dess;
                        }
                        if($pregunta->id == 4){
                            $descoP4 = $dess;
                        }
                        if($pregunta->id == 5){
                            $descoP5 = $dess;
                        }
                        if($pregunta->id == 6){
                            $descoP6 = $dess;
                        }
                        if($pregunta->id == 7){
                            $descoP7 = $dess;
                        }
                        if($pregunta->id == 8){
                            $descoP8 = $dess;
                        }
                        if($pregunta->id == 9){
                            $descoP9 = $dess;
                        }
                    }
                }
            }
        }

        if(empty($siP1)) {
             $siP1 = 0;
        }
        if(empty($siP2)){
            $siP2 = 0;
        }
        if(empty($siP3)){
            $siP3 = 0;
        }
        if(empty($siP4)){
            $siP4 = 0;
        }
        if(empty($siP5)){
            $siP5 = 0;
        }
        if(empty($siP6)){
            $siP6 = 0;
        }
        if(empty($siP7)){
            $siP7 = 0;
        }
        if(empty($siP8)){
            $siP8 = 0;
        }
        if(empty($siP9)){
            $siP9 = 0;
        }

        if(empty($noP1)) {
            $noP1 = 0;
        }
        if(empty($noP2)) {
            $noP2 = 0;
        }
        if(empty($noP3)) {
            $noP3 = 0;
        }
        if(empty($noP4)) {
            $noP4 = 0;
        }
        if(empty($noP5)) {
            $noP5 = 0;
        }
        if(empty($noP6)) {
            $noP6 = 0;
        }
        if(empty($noP7)) {
            $noP7 = 0;
        }
        if(empty($noP8)) {
            $noP8 = 0;
        }
        if(empty($noP9)) {
            $noP9 = 0;
        }


        if(empty($alP1)) {
            $alP1 = 0;
        }
        if(empty($alP2)) {
            $alP2 = 0;
        }
        if(empty($alP3)) {
            $alP3 = 0;
        }
        if(empty($alP4)) {
            $alP4 = 0;
        }
        if(empty($alP5)) {
            $alP5 = 0;
        }
        if(empty($alP6)) {
            $alP6 = 0;
        }
        if(empty($alP7)) {
            $alP7 = 0;
        }
        if(empty($alP8)) {
            $alP8 = 0;
        }
        if(empty($alP9)) {
            $alP9 = 0;
        }

        if(empty($descoP1)) {
            $descoP1 = 0;
        }
        if(empty($descoP2)) {
            $descoP2 = 0;
        }
        if(empty($descoP3)) {
            $descoP3 = 0;
        }
        if(empty($descoP4)) {
            $descoP4 = 0;
        }
        if(empty($descoP5)) {
            $descoP5 = 0;
        }
        if(empty($descoP6)) {
            $descoP6 = 0;
        }
        if(empty($descoP7)) {
            $descoP7 = 0;
        }
        if(empty($descoP8)) {
            $descoP8 = 0;
        }
        if(empty($descoP9)) {
            $descoP9 = 0;
        }

        $tit ='Ambiente de trabajo y discriminación';

        return view('reportes.verGraficas', compact('siP1','siP2','siP3','siP4','siP5','siP6','siP7','siP8','siP9', 'noP1','noP2','noP3','noP4','noP5','noP6','noP7','noP8','noP9','alP1','alP2','alP3','alP4','alP5','alP6','alP7','alP8','alP9','descoP1','descoP2','descoP3','descoP4','descoP5','descoP6','descoP7', 'descoP8','descoP9','tit'));

    }

    public function verGrafica2($id){

        $datos = explode("-", $id);
        $id = $datos[0];
        $genero = $datos[1];
        $genero_id = $datos[2];

        $collection1 = collect([]);
        $collection2 = collect([]);
        $collection3 = collect([]);
        $collection4 = collect([]);
        $respuestas = [];

        $ubicacion = Dependencia::whereidDependencia($id)->first();

        $preguntas = Preguntas::all();

        if ($genero == 1){
            $usuariosDep = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
            foreach ($usuariosDep as $uDep){
                $usGeneroG = DatosGeneralesU::where('sexo', $genero_id)->where('rfc_usuario',$uDep->N_Usuario)->first();
                if ($usGeneroG){
                    $usGenero[] = $usGeneroG;
                }
            }
            foreach ($usGenero as $usG){
                $usuarioss = ServidorPulbicoDetail::where('N_Usuario',$usG->rfc_usuario)->first();
                $usuarios[] = $usuarioss;
            }
        }else{
            $usuarios = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
        }


        foreach ($usuarios as $usuario) {
            if ($usuario->user) {
                $res = Respuestas::where('user_rfc', $usuario->user->rfc)->get();
                if (!$res->isEmpty()) {
                    array_push($respuestas, $res);
                }
            }
        }

        foreach ($respuestas as $respuesta) {
            foreach ($respuesta as $item) {
                if ($item->respuesta == "A") {

                    $collection1->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                } elseif ($item->respuesta == "B") {

                    $collection2->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "C") {

                    $collection3->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "D") {

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
        $siP1 = 0;
        $noP1 = 0;
        $alP1 = 0;
        $descoP1 = 0;

        foreach ($preguntas as $pregunta){
            foreach ($sumaA as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        //dd($value);
                        if (!empty($value)){
                            $sii = $value;
                        }else{
                            $sii = 0;
                        }
                        if($pregunta->id == 10){
                            $siP1 = $sii;
                        }
                        if($pregunta->id == 11){
                            $siP2 = $sii;
                        }
                        if($pregunta->id == 12){
                            $siP3 = $sii;
                        }
                        if($pregunta->id == 13){
                            $siP4 = $sii;
                        }
                        if($pregunta->id == 14){
                            $siP5 = $sii;
                        }

                        if($pregunta->id == 15){
                            $siP6 = $sii;
                        }

                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaB as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $noo = $value;
                        }else{
                            $noo = 0;
                        }
                        if($pregunta->id == 10){
                            $noP1 = $noo;
                        }
                        if($pregunta->id == 11){
                            $noP2 = $noo;
                        }
                        if($pregunta->id == 12){
                            $noP3 = $noo;
                        }
                        if($pregunta->id == 13){
                            $noP4 = $noo;
                        }
                        if($pregunta->id == 14){
                            $noP5 = $noo;
                        }
                        if($pregunta->id == 15){
                            $noP6 = $noo;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaC as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $all = $value;
                        }else{
                            $all = 0;
                        }
                        if($pregunta->id == 10){
                            $alP1 = $all;
                        }
                        if($pregunta->id == 11){
                            $alP2 = $all;
                        }
                        if($pregunta->id == 12){
                            $alP3 = $all;
                        }
                        if($pregunta->id == 13){
                            $alP4 = $all;
                        }
                        if($pregunta->id == 14){
                            $alP5 = $all;
                        }
                        if($pregunta->id == 15){
                            $alP6 = $all;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaD as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $dess = $value;
                        }else{
                            $dess = 0;
                        }
                        if($pregunta->id == 10){
                            $descoP1 = $dess;
                        }
                        if($pregunta->id == 11){
                            $descoP2 = $dess;
                        }
                        if($pregunta->id == 12){
                            $descoP3 = $dess;
                        }
                        if($pregunta->id == 13){
                            $descoP4 = $dess;
                        }
                        if($pregunta->id == 14){
                            $descoP5 = $dess;
                        }
                        if($pregunta->id == 15){
                            $descoP6 = $dess;
                        }
                    }
                }
            }
        }

        if(empty($siP1)) {
            $siP1 = 0;
        }
        if(empty($siP2)){
            $siP2 = 0;
        }
        if(empty($siP3)){
            $siP3 = 0;
        }
        if(empty($siP4)){
            $siP4 = 0;
        }
        if(empty($siP5)){
            $siP5 = 0;
        }
        if(empty($siP6)){
            $siP6 = 0;
        }

        if(empty($noP1)) {
            $noP1 = 0;
        }
        if(empty($noP2)) {
            $noP2 = 0;
        }
        if(empty($noP3)) {
            $noP3 = 0;
        }
        if(empty($noP4)) {
            $noP4 = 0;
        }
        if(empty($noP5)) {
            $noP5 = 0;
        }
        if(empty($noP6)) {
            $noP6 = 0;
        }

        if(empty($alP1)) {
            $alP1 = 0;
        }
        if(empty($alP2)) {
            $alP2 = 0;
        }
        if(empty($alP3)) {
            $alP3 = 0;
        }
        if(empty($alP4)) {
            $alP4 = 0;
        }
        if(empty($alP5)) {
            $alP5 = 0;
        }
        if(empty($alP6)) {
            $alP6 = 0;
        }


        if(empty($descoP1)) {
            $descoP1 = 0;
        }
        if(empty($descoP2)) {
            $descoP2 = 0;
        }
        if(empty($descoP3)) {
            $descoP3 = 0;
        }
        if(empty($descoP4)) {
            $descoP4 = 0;
        }
        if(empty($descoP5)) {
            $descoP5 = 0;
        }
        if(empty($descoP6)) {
            $descoP6 = 0;
        }

        $tit ='Condiciones de trabajo';

        return view('reportes.verGraficas2', compact('siP1','siP2','siP3','siP4','siP5','siP6', 'noP1','noP2','noP3','noP4','noP5','noP6','alP1','alP2','alP3','alP4','alP5','alP6','descoP1','descoP2','descoP3','descoP4','descoP5','descoP6','tit'));
    }

    public function verGrafica3($id){
        $datos = explode("-", $id);
        $id = $datos[0];
        $genero = $datos[1];
        $genero_id = $datos[2];

        $collection1 = collect([]);
        $collection2 = collect([]);
        $collection3 = collect([]);
        $collection4 = collect([]);
        $respuestas = [];

        $ubicacion = Dependencia::whereidDependencia($id)->first();

        $preguntas = Preguntas::all();

        if ($genero == 1){
            $usuariosDep = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
            foreach ($usuariosDep as $uDep){
                $usGeneroG = DatosGeneralesU::where('sexo', $genero_id)->where('rfc_usuario',$uDep->N_Usuario)->first();
                if ($usGeneroG){
                    $usGenero[] = $usGeneroG;
                }
            }
            foreach ($usGenero as $usG){
                $usuarioss = ServidorPulbicoDetail::where('N_Usuario',$usG->rfc_usuario)->first();
                $usuarios[] = $usuarioss;
            }
        }else{
            $usuarios = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
        }

        foreach ($usuarios as $usuario) {
            if ($usuario->user) {
                $res = Respuestas::where('user_rfc', $usuario->user->rfc)->get();
                if (!$res->isEmpty()) {
                    array_push($respuestas, $res);
                }
            }
        }

        foreach ($respuestas as $respuesta) {
            foreach ($respuesta as $item) {
                if ($item->respuesta == "A") {

                    $collection1->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                } elseif ($item->respuesta == "B") {

                    $collection2->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "C") {

                    $collection3->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "D") {

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
        $siP1 = 0;
        $noP1 = 0;
        $alP1 = 0;
        $descoP1 = 0;

        foreach ($preguntas as $pregunta){
            foreach ($sumaA as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        //dd($value);
                        if (!empty($value)){
                            $sii = $value;
                        }else{
                            $sii = 0;
                        }
                        if($pregunta->id == 16){
                            $siP1 = $sii;
                        }
                        if($pregunta->id == 17){
                            $siP2 = $sii;
                        }
                        if($pregunta->id == 18){
                            $siP3 = $sii;
                        }
                        if($pregunta->id == 19){
                            $siP4 = $sii;
                        }
                        if($pregunta->id == 20){
                            $siP5 = $sii;
                        }

                        if($pregunta->id == 21){
                            $siP6 = $sii;
                        }

                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaB as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $noo = $value;
                        }else{
                            $noo = 0;
                        }
                        if($pregunta->id == 16){
                            $noP1 = $noo;
                        }
                        if($pregunta->id == 17){
                            $noP2 = $noo;
                        }
                        if($pregunta->id == 18){
                            $noP3 = $noo;
                        }
                        if($pregunta->id == 19){
                            $noP4 = $noo;
                        }
                        if($pregunta->id == 20){
                            $noP5 = $noo;
                        }
                        if($pregunta->id == 21){
                            $noP6 = $noo;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaC as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $all = $value;
                        }else{
                            $all = 0;
                        }
                        if($pregunta->id == 16){
                            $alP1 = $all;
                        }
                        if($pregunta->id == 17){
                            $alP2 = $all;
                        }
                        if($pregunta->id == 18){
                            $alP3 = $all;
                        }
                        if($pregunta->id == 19){
                            $alP4 = $all;
                        }
                        if($pregunta->id == 20){
                            $alP5 = $all;
                        }
                        if($pregunta->id == 21){
                            $alP6 = $all;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaD as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $dess = $value;
                        }else{
                            $dess = 0;
                        }
                        if($pregunta->id == 16){
                            $descoP1 = $dess;
                        }
                        if($pregunta->id == 17){
                            $descoP2 = $dess;
                        }
                        if($pregunta->id == 18){
                            $descoP3 = $dess;
                        }
                        if($pregunta->id == 19){
                            $descoP4 = $dess;
                        }
                        if($pregunta->id == 20){
                            $descoP5 = $dess;
                        }
                        if($pregunta->id == 21){
                            $descoP6 = $dess;
                        }
                    }
                }
            }
        }

        if(empty($siP1)) {
            $siP1 = 0;
        }
        if(empty($siP2)){
            $siP2 = 0;
        }
        if(empty($siP3)){
            $siP3 = 0;
        }
        if(empty($siP4)){
            $siP4 = 0;
        }
        if(empty($siP5)){
            $siP5 = 0;
        }
        if(empty($siP6)){
            $siP6 = 0;
        }

        if(empty($noP1)) {
            $noP1 = 0;
        }
        if(empty($noP2)) {
            $noP2 = 0;
        }
        if(empty($noP3)) {
            $noP3 = 0;
        }
        if(empty($noP4)) {
            $noP4 = 0;
        }
        if(empty($noP5)) {
            $noP5 = 0;
        }
        if(empty($noP6)) {
            $noP6 = 0;
        }

        if(empty($alP1)) {
            $alP1 = 0;
        }
        if(empty($alP2)) {
            $alP2 = 0;
        }
        if(empty($alP3)) {
            $alP3 = 0;
        }
        if(empty($alP4)) {
            $alP4 = 0;
        }
        if(empty($alP5)) {
            $alP5 = 0;
        }
        if(empty($alP6)) {
            $alP6 = 0;
        }


        if(empty($descoP1)) {
            $descoP1 = 0;
        }
        if(empty($descoP2)) {
            $descoP2 = 0;
        }
        if(empty($descoP3)) {
            $descoP3 = 0;
        }
        if(empty($descoP4)) {
            $descoP4 = 0;
        }
        if(empty($descoP5)) {
            $descoP5 = 0;
        }
        if(empty($descoP6)) {
            $descoP6 = 0;
        }

        $tit ='Permanencia y promoción';

        return view('reportes.verGraficas3', compact('siP1','siP2','siP3','siP4','siP5','siP6', 'noP1','noP2','noP3','noP4','noP5','noP6','alP1','alP2','alP3','alP4','alP5','alP6','descoP1','descoP2','descoP3','descoP4','descoP5','descoP6','tit'));
    }

    public function verGrafica4($id){
        $datos = explode("-", $id);
        $id = $datos[0];
        $genero = $datos[1];
        $genero_id = $datos[2];

        $collection1 = collect([]);
        $collection2 = collect([]);
        $collection3 = collect([]);
        $collection4 = collect([]);
        $respuestas = [];

        $ubicacion = Dependencia::whereidDependencia($id)->first();

        $preguntas = Preguntas::all();

        if ($genero == 1){
            $usuariosDep = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
            foreach ($usuariosDep as $uDep){
                $usGeneroG = DatosGeneralesU::where('sexo', $genero_id)->where('rfc_usuario',$uDep->N_Usuario)->first();
                if ($usGeneroG){
                    $usGenero[] = $usGeneroG;
                }
            }
            foreach ($usGenero as $usG){
                $usuarioss = ServidorPulbicoDetail::where('N_Usuario',$usG->rfc_usuario)->first();
                $usuarios[] = $usuarioss;
            }
        }else{
            $usuarios = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
        }

        foreach ($usuarios as $usuario) {
            if ($usuario->user) {
                $res = Respuestas::where('user_rfc', $usuario->user->rfc)->get();
                if (!$res->isEmpty()) {
                    array_push($respuestas, $res);
                }
            }
        }

        foreach ($respuestas as $respuesta) {
            foreach ($respuesta as $item) {
                if ($item->respuesta == "A") {

                    $collection1->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                } elseif ($item->respuesta == "B") {

                    $collection2->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "C") {

                    $collection3->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "D") {

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
        $siP1 = 0;
        $noP1 = 0;
        $alP1 = 0;
        $descoP1 = 0;

        foreach ($preguntas as $pregunta){
            foreach ($sumaA as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        //dd($value);
                        if (!empty($value)){
                            $sii = $value;
                        }else{
                            $sii = 0;
                        }
                        if($pregunta->id == 22){
                            $siP1 = $sii;
                        }
                        if($pregunta->id == 23){
                            $siP2 = $sii;
                        }
                        if($pregunta->id == 24){
                            $siP3 = $sii;
                        }
                        if($pregunta->id == 25){
                            $siP4 = $sii;
                        }
                        if($pregunta->id == 26){
                            $siP5 = $sii;
                        }

                        if($pregunta->id == 27){
                            $siP6 = $sii;
                        }

                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaB as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $noo = $value;
                        }else{
                            $noo = 0;
                        }
                        if($pregunta->id == 22){
                            $noP1 = $noo;
                        }
                        if($pregunta->id == 23){
                            $noP2 = $noo;
                        }
                        if($pregunta->id == 24){
                            $noP3 = $noo;
                        }
                        if($pregunta->id == 25){
                            $noP4 = $noo;
                        }
                        if($pregunta->id == 26){
                            $noP5 = $noo;
                        }
                        if($pregunta->id == 27){
                            $noP6 = $noo;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaC as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $all = $value;
                        }else{
                            $all = 0;
                        }
                        if($pregunta->id == 22){
                            $alP1 = $all;
                        }
                        if($pregunta->id == 23){
                            $alP2 = $all;
                        }
                        if($pregunta->id == 24){
                            $alP3 = $all;
                        }
                        if($pregunta->id == 25){
                            $alP4 = $all;
                        }
                        if($pregunta->id == 26){
                            $alP5 = $all;
                        }
                        if($pregunta->id == 27){
                            $alP6 = $all;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaD as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $dess = $value;
                        }else{
                            $dess = 0;
                        }
                        if($pregunta->id == 22){
                            $descoP1 = $dess;
                        }
                        if($pregunta->id == 23){
                            $descoP2 = $dess;
                        }
                        if($pregunta->id == 24){
                            $descoP3 = $dess;
                        }
                        if($pregunta->id == 25){
                            $descoP4 = $dess;
                        }
                        if($pregunta->id == 26){
                            $descoP5 = $dess;
                        }
                        if($pregunta->id == 27){
                            $descoP6 = $dess;
                        }
                    }
                }
            }
        }

        if(empty($siP1)) {
            $siP1 = 0;
        }
        if(empty($siP2)){
            $siP2 = 0;
        }
        if(empty($siP3)){
            $siP3 = 0;
        }
        if(empty($siP4)){
            $siP4 = 0;
        }
        if(empty($siP5)){
            $siP5 = 0;
        }
        if(empty($siP6)){
            $siP6 = 0;
        }

        if(empty($noP1)) {
            $noP1 = 0;
        }
        if(empty($noP2)) {
            $noP2 = 0;
        }
        if(empty($noP3)) {
            $noP3 = 0;
        }
        if(empty($noP4)) {
            $noP4 = 0;
        }
        if(empty($noP5)) {
            $noP5 = 0;
        }
        if(empty($noP6)) {
            $noP6 = 0;
        }

        if(empty($alP1)) {
            $alP1 = 0;
        }
        if(empty($alP2)) {
            $alP2 = 0;
        }
        if(empty($alP3)) {
            $alP3 = 0;
        }
        if(empty($alP4)) {
            $alP4 = 0;
        }
        if(empty($alP5)) {
            $alP5 = 0;
        }
        if(empty($alP6)) {
            $alP6 = 0;
        }


        if(empty($descoP1)) {
            $descoP1 = 0;
        }
        if(empty($descoP2)) {
            $descoP2 = 0;
        }
        if(empty($descoP3)) {
            $descoP3 = 0;
        }
        if(empty($descoP4)) {
            $descoP4 = 0;
        }
        if(empty($descoP5)) {
            $descoP5 = 0;
        }
        if(empty($descoP6)) {
            $descoP6 = 0;
        }

        $tit ='Capacitación y formación';

        return view('reportes.verGraficas4', compact('siP1','siP2','siP3','siP4','siP5','siP6', 'noP1','noP2','noP3','noP4','noP5','noP6','alP1','alP2','alP3','alP4','alP5','alP6','descoP1','descoP2','descoP3','descoP4','descoP5','descoP6','tit'));
    }

    public function verGrafica5($id)
    {
        $datos = explode("-", $id);
        $id = $datos[0];
        $genero = $datos[1];
        $genero_id = $datos[2];

        $collection1 = collect([]);
        $collection2 = collect([]);
        $collection3 = collect([]);
        $collection4 = collect([]);
        $respuestas = [];

        $ubicacion = Dependencia::whereidDependencia($id)->first();

        $preguntas = Preguntas::all();

        if ($genero == 1){
            $usuariosDep = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
            foreach ($usuariosDep as $uDep){
                $usGeneroG = DatosGeneralesU::where('sexo', $genero_id)->where('rfc_usuario',$uDep->N_Usuario)->first();
                if ($usGeneroG){
                    $usGenero[] = $usGeneroG;
                }
            }
            foreach ($usGenero as $usG){
                $usuarioss = ServidorPulbicoDetail::where('N_Usuario',$usG->rfc_usuario)->first();
                $usuarios[] = $usuarioss;
            }
        }else{
            $usuarios = ServidorPulbicoDetail::where('id_Dependencia', $ubicacion->id_Dependencia)->get();
        }

        foreach ($usuarios as $usuario) {
            if ($usuario->user) {
                $res = Respuestas::where('user_rfc', $usuario->user->rfc)->get();
                if (!$res->isEmpty()) {
                    array_push($respuestas, $res);
                }
            }
        }

        foreach ($respuestas as $respuesta) {
            foreach ($respuesta as $item) {
                if ($item->respuesta == "A") {

                    $collection1->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);

                } elseif ($item->respuesta == "B") {

                    $collection2->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "C") {

                    $collection3->push([
                        "id_pregunta" => $item->pregunta,
                        "respuesta" => $item->respuesta
                    ]);


                } elseif ($item->respuesta == "D") {

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
        $siP1 = 0;
        $noP1 = 0;
        $alP1 = 0;
        $descoP1 = 0;

        foreach ($preguntas as $pregunta){
            foreach ($sumaA as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        //dd($value);
                        if (!empty($value)){
                            $sii = $value;
                        }else{
                            $sii = 0;
                        }
                        if($pregunta->id == 28){
                            $siP1 = $sii;
                        }
                        if($pregunta->id == 29){
                            $siP2 = $sii;
                            //   dd($siP2);
                        }
                        if($pregunta->id == 30){
                            $siP3 = $sii;
                        }
                        if($pregunta->id == 31){
                            $siP4 = $sii;
                        }
                        if($pregunta->id == 32){
                            $siP5 = $sii;
                        }

                        if($pregunta->id == 33){
                            $siP6 = $sii;
                        }

                        if($pregunta->id == 34){
                            $siP7 = $sii;
                        }

                        if($pregunta->id == 35){
                            $siP8 = $sii;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaB as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $noo = $value;
                        }else{
                            $noo = 0;
                        }
                        if($pregunta->id == 28){
                            $noP1 = $noo;
                        }
                        if($pregunta->id == 29){
                            $noP2 = $noo;
                        }
                        if($pregunta->id == 30){
                            $noP3 = $noo;
                        }
                        if($pregunta->id == 31){
                            $noP4 = $noo;
                        }
                        if($pregunta->id == 32){
                            $noP5 = $noo;
                        }
                        if($pregunta->id == 33){
                            $noP6 = $noo;
                        }
                        if($pregunta->id == 34){
                            $noP7 = $noo;
                        }
                        if($pregunta->id == 35){
                            $noP8 = $noo;
                        }
                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaC as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $all = $value;
                        }else{
                            $all = 0;
                        }
                        if($pregunta->id == 28){
                            $alP1 = $all;
                        }
                        if($pregunta->id == 29){
                            $alP2 = $all;
                        }
                        if($pregunta->id == 30){
                            $alP3 = $all;
                        }
                        if($pregunta->id == 31){
                            $alP4 = $all;
                        }
                        if($pregunta->id == 32){
                            $alP5 = $all;
                        }
                        if($pregunta->id == 33){
                            $alP6 = $all;
                        }
                        if($pregunta->id == 34){
                            $alP7 = $all;
                        }
                        if($pregunta->id == 35){
                            $alP8 = $all;
                        }

                    }
                }
            }
        }

        foreach ($preguntas as $pregunta){
            foreach ($sumaD as $key => $value){
                if ($key == $pregunta->id){
                    if ($key == $pregunta->id){
                        if (!empty($value)){
                            $dess = $value;
                        }else{
                            $dess = 0;
                        }
                        if($pregunta->id == 28){
                            $descoP1 = $dess;
                        }
                        if($pregunta->id == 29){
                            $descoP2 = $dess;
                        }
                        if($pregunta->id == 30){
                            $descoP3 = $dess;
                        }
                        if($pregunta->id == 31){
                            $descoP4 = $dess;
                        }
                        if($pregunta->id == 32){
                            $descoP5 = $dess;
                        }
                        if($pregunta->id == 33){
                            $descoP6 = $dess;
                        }
                        if($pregunta->id == 34){
                            $descoP7 = $dess;
                        }
                        if($pregunta->id == 35){
                            $descoP8 = $dess;
                        }
                    }
                }
            }
        }

        if(empty($siP1)) {
            $siP1 = 0;
        }
        if(empty($siP2)){
            $siP2 = 0;
        }
        if(empty($siP3)){
            $siP3 = 0;
        }
        if(empty($siP4)){
            $siP4 = 0;
        }
        if(empty($siP5)){
            $siP5 = 0;
        }
        if(empty($siP6)){
            $siP6 = 0;
        }
        if(empty($siP7)){
            $siP7 = 0;
        }
        if(empty($siP8)){
            $siP8 = 0;
        }

        if(empty($noP1)) {
            $noP1 = 0;
        }
        if(empty($noP2)) {
            $noP2 = 0;
        }
        if(empty($noP3)) {
            $noP3 = 0;
        }
        if(empty($noP4)) {
            $noP4 = 0;
        }
        if(empty($noP5)) {
            $noP5 = 0;
        }
        if(empty($noP6)) {
            $noP6 = 0;
        }
        if(empty($noP7)) {
            $noP7 = 0;
        }
        if(empty($noP8)) {
            $noP8 = 0;
        }


        if(empty($alP1)) {
            $alP1 = 0;
        }
        if(empty($alP2)) {
            $alP2 = 0;
        }
        if(empty($alP3)) {
            $alP3 = 0;
        }
        if(empty($alP4)) {
            $alP4 = 0;
        }
        if(empty($alP5)) {
            $alP5 = 0;
        }
        if(empty($alP6)) {
            $alP6 = 0;
        }
        if(empty($alP7)) {
            $alP7 = 0;
        }
        if(empty($alP8)) {
            $alP8 = 0;
        }


        if(empty($descoP1)) {
            $descoP1 = 0;
        }
        if(empty($descoP2)) {
            $descoP2 = 0;
        }
        if(empty($descoP3)) {
            $descoP3 = 0;
        }
        if(empty($descoP4)) {
            $descoP4 = 0;
        }
        if(empty($descoP5)) {
            $descoP5 = 0;
        }
        if(empty($descoP6)) {
            $descoP6 = 0;
        }
        if(empty($descoP7)) {
            $descoP7 = 0;
        }
        if(empty($descoP8)) {
            $descoP8 = 0;
        }


        $tit ='Corresponsabilidad entre la vida laboral, familiar y personal';

        return view('reportes.verGraficas5', compact('siP1','siP2','siP3','siP4','siP5','siP6','siP7','siP8', 'noP1','noP2','noP3','noP4','noP5','noP6','noP7','noP8','alP1','alP2','alP3','alP4','alP5','alP6','alP7','alP8','descoP1','descoP2','descoP3','descoP4','descoP5','descoP6','descoP7', 'descoP8','tit'));

    }

    public function preguntaG()
    {
        $Dependencia = Arr::pluck(\App\Models\Dependencia::all(), "Nombre","id_Dependencia");
        $genero = Arr::pluck(Sexo::all(),'respuesta','id');
        //    $preguntas= Preguntas::paginate(5);
        return view('reportes.preguntaG', compact('Dependencia','genero'));
    }

    public function getDepG($id, $genero_id){

        $usuariosDep = ServidorPulbicoDetail::where('id_Dependencia', $id)->get();
        foreach ($usuariosDep as $uDep){
            $usGeneroG = DatosGeneralesU::where('sexo', $genero_id)->where('rfc_usuario',$uDep->N_Usuario)->first();
            if ($usGeneroG){
                $usGenero[] = $usGeneroG;
            }
        }

        $collection1 = collect([]);
        $collection2 = collect([]);
        $collection3 = collect([]);
        $collection4 = collect([]);
        $respuestas = [];

        $ubicacion = Dependencia::whereidDependencia($id)->first();

        $preguntas = Preguntas::all();
        foreach ($usGenero as $usG){
            $usuarioss = ServidorPulbicoDetail::where('N_Usuario',$usG->rfc_usuario)->first();
            $usuarios[] = $usuarioss;
        }

        //dd($usuarios);

        foreach ($usuarios as $usuario) {
           // dd($usuario);
            if($usuario->user){
                $res = Respuestas::where('user_rfc',$usuario->user->rfc)->get();
                if(!$res->isEmpty()){
                    array_push($respuestas,$res);
                }
            }
        }
        foreach ($respuestas as $respuesta) {
           // dd($respuesta);
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
        $genero = true;
        return view('reportes.show', compact('preguntas','sumaA','sumaB','sumaC','sumaD','ubicacion','id','genero','genero_id'));
    }
}
