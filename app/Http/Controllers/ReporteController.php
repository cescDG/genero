<?php

namespace App\Http\Controllers;
use App\Models\Preguntas;

use Illuminate\Http\Request;

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

    public function dependencia()
    {
        return view('reportes.dependencia');
    }
    public function pregunta()
    {
       $preguntas= Preguntas::paginate(5);
        return view('reportes.pregunta', compact('preguntas'));
    }
}



