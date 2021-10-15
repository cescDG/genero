@extends('layout')
@section('title')
    REPORTE INDIVIDUAL
@endsection
@section('content')
    <div class="card-body">
        <div class="container">
            <div class="section">
                <div class="height-30vh">

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
                            <h4 align="center">Reporte individual</h4>

                            <table class="responsive-table">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>RFC</th>
                                    <th>Dependencia</th>
                                    <th>Dirección</th>
                                    <th>Departamento</th>
                                    <th>Estatus</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ( $usuarios as $usuario)
                                    <tr>
                                        <th>{{$usuario->Nombre}}</th>
                                        <th>{{$usuario->N_Usuario}}</th>
                                        <th>{{$usuario->dependencia->Nombre}}</th>
                                        <th>{{$usuario->direccion->Nombre}}</th>
                                        <th>{{$usuario->departamento->Nombre}}</th>
                                        <th>Estatus</th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

