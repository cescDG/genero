<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RegionalUsers implements FromView
{
    public $sumaA;
    public function __construct($sumaA)
    {
        $this->sumaA = $sumaA;
    }
    /**
     *
     *
    * @return \Illuminate\Support\Collection
    */

    public function view(): view
    {
        $sumaA = $this->sumaA;

        return view('reportes.printExc', compact('sumaA'));
    }
}
