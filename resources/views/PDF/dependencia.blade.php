@extends('layouts.pdf')

@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3 style="text-align: center;">REPORTE DE {{$ubicacion->Nombre}}</h3>
            </div>
            <div class="card-body">
                @foreach ($preguntas as $pregunta)


                    <table class="striped" style="border:1px solid;">

                        <thead>
                            <tr>
                                <th>{{ $pregunta->texto }}</th>
                                <th>Sí</th>
                                <th>No</th>
                                <th>Algunas veces</th>
                                <th>Desconozo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Total</td>
                               
                                    <td>
                                        @foreach($sumaA as $key => $value)
                                            @if($key == $pregunta->id)
                                                {{$value}}
                                            @endif
                                        @endforeach
                                    </td>
                                   

                              
                                    <td>
                                        @foreach($sumaB as $key => $value)
                                            @if($key == $pregunta->id)
                                            {{$value}}
                                            @endif
                                        @endforeach
                                    </td>
                                 

                               
                                    <td>
                                        @foreach($sumaC as $key => $value)
                                            @if($key == $pregunta->id)
                                            {{$value}}
                                            @endif
                                        @endforeach
                                    </td>
                                  

                                    <td>

                                        @foreach($sumaD as $key => $value)
                                            @if($key == $pregunta->id)
                                                    {{$value}}
                                            @endif
                                        @endforeach
                                    </td>
                                  
                            </tr>   
                            
                        </tbody>
                    </table>
                        <br>

                 @endforeach
                
            </div>
        </div>
@endsection



