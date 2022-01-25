<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SinRegistroExcelExport implements FromView
{
    public $usuarios ;
    public function __construct($usuarios)
    {
        $this->usuarios = $usuarios;
    }

    /**
     *
     *
     * @return \Illuminate\Support\Collection
     */

    public function view(): view
    {
        $usuarios = $this->usuarios;
        return view('reportes.verSinRegExcel', compact('usuarios'));
    }
}
