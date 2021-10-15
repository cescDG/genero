@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
            <h3>Diagnóstico de igualdad de trato y oportunidades entre mujeres y hombres</h3>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-0" data-toggle="collapse" href="#collapseDatosEmpleo"
                      role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
    </div>
    <div class="collapse" id="collapseDatosEmpleo" style="">
        <div class="card-body">
            <p align="justify">Para la declaración de inicio reportar la situación de los vehículos a la fecha de ingreso al empleo, cargo o comisión.<br>
                Para la declaración de modificación reportar la situación de los vehículos del año inmediato anterior.<br>
                Para la declaración de conclusión reportar la situación de los vehículos a la fecha de conclusión del empleo, cargo o comisión.<br>
            </p>
            <ol>
                <li><p align="justify"> <strong>Tipo de vehículo.</strong> Seleccionar el tipo de vehículo del listado desplegable: automóvil/motocicleta, aeronave, barco/yate, otro, especifique.</p></li>
                      </ol>
            <p align="justify"><strong>Aclaraciones / Observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.<br><br></p>
        </div>
    </div>
    <div class="card-body">
        @if(count($respuestas))
        <div class="card-body">
            <div class="container">
                <br>
                <center>
                    <img class="collection-item avatar" src="{{ asset('genero/images/logo/warning.png')}}" width="25" height="25"  alt="name" class="circle">

                    <strong class>ENCUESTA REALIZADA</strong>
                    <br>
                    <br>

                </center>
            </div>
            <br>
        </div>
        @else
        <h2> Diagnóstico de igualdad de trato y oportunidades entre mujeres y hombres</h2>
        {!! Form::open(['route'=>'encuesta.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
        @include('Encuesta.form')
        {!! Form::close() !!}
        @endif

    </div>
@endsection


