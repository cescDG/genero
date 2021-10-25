<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\Solicitud;
use App\Models\Validacion;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libros::all();
        foreach ($libros as $libro){
            $solicitudes = Solicitud::where('status','!=','2')->where('libro_id', $libro->id)->first();
            if ($solicitudes){
                $libro['disponible'] = $solicitudes->fecha_entrega_sistema;
            }
        }
        return view('libros.show', compact('libros'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $solicitud = Solicitud::find($id);
        if($solicitud->status == 0){
            $sol['status'] = 1;
            $sol['observaciones'] = $request->observaciones;
        }elseif($solicitud->status == 1){
            if ($request->entregado == 1){
                $sol['status'] =2;
            }
        }
        $solicitud->update($sol);
        return redirect('solicitudes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function solicitudes(){
        $libros = Libros::all();
        foreach ($libros as $libro){
            $solicitudes = Solicitud::where('status','!=','2')->where('libro_id', $libro->id)->first();
            if ($solicitudes){
                $libro['disponible'] = $solicitudes->created_at;
                if($solicitudes->status == 0){
                    $libro['status'] = 'Pendiente por aprobar';
                }else if ($solicitudes->status == 1){
                    $libro['status'] = 'Prestado';
                }
            }
        }
        return view('libros.verSolicitudes', compact('libros'));
    }

    public function aprobar($id){
        $solicitud = Solicitud::where('libro_id', $id)->where('status',0)->orwhere('status',1)->first();
        $validacion =Arr::pluck(Validacion::all(), "tipo", "id");
        return view('libros.aprobar', compact('solicitud','validacion'));
    }

    public function busquedaLibro(Request $request){
        $libro = Libros::all();
    }
}
