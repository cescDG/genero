@extends('layout')
@section('title')
    REGISTRO DE EVENTOS
@endsection
@section('content')
<div class="card-body">
    <div class="container">
        <div class="section">
            <div class="height-30vh">
                <center>
                    <img src="{{asset('foro/images/logo/logoSec.png')}}" alt="materialize" width="40%" heigth="40%"
                        style="border-radius:15;" />
                </center>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="section">
        <div class="card">
            <div class="section section-data-tables">

                <div class="row">
                    <div class="col s12">
                        <h4 align="center">Catálogo de eventos</h4>
                        
                        <table id="page-length-option" style="width: 100%" class="display">
                            <thead>
                                <tr>
                                    <th style="width: 60%;"><strong>Tipo de Reunión</strong></th>
                                    <th style="width: 60%;"><strong>Fecha/Hora</strong></th>
                                    <th style="width: 60%;"><strong>Medio</strong></th>
                                    <th style="width: 60%;"><strong>Comisión</strong></th>
                                    <th style="width: 60%;"><strong>Lugar</strong></th>
                                    <th style="width: 60%;"><strong>Convocatoria</strong></th>
                                    <th style="width: 60%;"><strong>Orden del Día</strong></th>
                                    <th style="width: 60%;"><strong>Acta de la sesión anterior</strong></th>
                                    <th style="width: 60%;"><strong>Material de Apoyo</strong></th>
                                    <th style="width: 60%;"><strong>Iniciativas a discutir </strong></th>
                                    <th style="width: 60%;"><strong>Dictamen</strong></th>
                                    <th style="width: 60%;"><strong>Observaciones</strong></th>
                                    <th style="width: 60%;"><strong>Acciones</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                        <div class="card-body">
                            <div class="container">
                                <br>
                                <center>
                                    <strong>Si desea registrar un evento pulse: <br><br><a
                                            href="" class="btn btn-sm btn-secondary"
                                            style="background-color:rgb(150,0,72);"><i
                                                class="material-icons left">add</i>Agregar</a></strong>
                                </center>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection