@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <div class="card-body">
        <div class="container">
            <div class="section">
                <div class="card">
                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <h4 class="text-align center">Prestamo de libros</h4>
                                <table id="page-length-option" class="display">
                                    <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Estatus</th>
                                        <th>Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $libros as $libro)
                                            <tr>
                                                <td>
                                                    <p style="text-align: left;">{{$libro->nombre}}</p>
                                                </td>
                                                <td>
                                                    @if(isset($libro->status))
                                                    <p>{{$libro->status}}</p>
                                                    @else
                                                        <p>Diponible</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(isset($libro->status))
                                                         @if ($libro->status == 'Pendiente por aprobar')
                                                            <a title="aprobar" class="tooltipped" data-position="bottom" data-tooltip="Aprobar"
                                                               href="{{ route('aprobar', [$libro->id]) }}">
                                                                <i class="material-icons iconlegislatura">visibility</i>
                                                            </a>
                                                        @elseif($libro->status == 'Prestado')
                                                            <a title="ver" class="tooltipped" data-position="bottom" data-tooltip="Ver"
                                                               href="{{ route('aprobar', [$libro->id])}}">
                                                                <i class="material-icons iconlegislatura">visibility</i>
                                                            </a>
                                                        @endif
                                                    @endif
                                                </td>
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
    </div>
@endsection
