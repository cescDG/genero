<?php

namespace App\Exports;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DependenciaExport implements FromView
{
    public $sumaA,$sumaB,$sumaC,$sumaD, $ubicacion,$preguntas ;
    public function __construct($sumaA,$sumaB,$sumaC,$sumaD,$ubicacion,$preguntas )
    {
        $this->sumaA = $sumaA;
        $this->sumaB = $sumaB;
        $this->sumaC = $sumaC;
        $this->sumaD = $sumaD;
        $this->ubicacion = $ubicacion;
        $this->preguntas = $preguntas;
    }




    /**
     *
     *
    * @return \Illuminate\Support\Collection
    */

    public function view(): view
    {
        $sumaA = $this->sumaA;
        $sumaB = $this->sumaB;
        $sumaC = $this->sumaC;
        $sumaD = $this->sumaD;
        $preguntas = $this->preguntas;

        $ubicacion = $this->ubicacion;

        return view('reportes.printExc', compact('preguntas','sumaA','sumaB','sumaC','sumaD','ubicacion'));
    }
}
