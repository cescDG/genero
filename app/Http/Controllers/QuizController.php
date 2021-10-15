<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\Quiz;
use App\Models\Respuestas;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Preguntas::all();
        $idUsuario = auth()->user()->id;
        $respuestas = Respuestas::where('user_id',$idUsuario)->get();


        return view('Encuesta.create', compact('preguntas','respuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servidorP = auth()->user()->id;
        $respuestas = $request->except('_token');

        for($i=1; $i <=35; $i++){
            if (isset($respuestas[$i])){
                $res['pregunta']=$i;
                $res['respuesta']=$respuestas[$i];
                $res['user_id']=$servidorP;

                $respuesta = Respuestas::create($res);
            }
            $i ++;
        }

         return redirect()->route('home')->with('correcto','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
