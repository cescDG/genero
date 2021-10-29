@extends('layout')
@section('title')
    INICIO
@endsection
@section('content')

    <div id="contenedor">
        <br>
        <div class="row">
            <div class="input-field col m10"></div>
            <div class="input-field col m2">
                <a href="{{route('libros.index')}}"><i class="material-icons" style="color:#ec731e; ">book</i><span
                        data-i18n="Modern Menu">Prestamo de libros</span></a>
            </div>
        </div>
        <div class="row">
            <div class="input-field col m2"></div>
            <div class="input-field col m8">
                <div class="card-alert card">
                    <div class="card-content">

                        <p align="justify" style="font-size: 18px;"><strong>Objetivo</strong></p><br>
                        <p align="justify" style="color: black;">Visibilizar situaciones de desigualdad individual y
                            colectiva entre mujeres y hombres al interior del Poder Legislativo, con el propósito de
                            establecer buenas prácticas que promuevan una cultura institucional que integre como
                            principio básico la igualdad y se reduzcan las brechas de inequidad y discriminación en su
                            espacio laboral.</p>
                        <br>


                        <p align="justify" style="font-size: 18px;"><strong>Instrucciones de llenado</strong></p>
                        <p align="justify" style="color: black;">Por favor, lea cuidadosamente cada una de las preguntas
                            que conforman las siete secciones del diagnóstico y manifieste en el botón de opción, la
                            respuesta que mejor describa su opinión de la unidad administrativa de adscripción. <strong> <a
                                    href="{{asset('genero/pdf/Aviso.pdf')}}" target="_blank"
                                    style="color: #8A084B !important; font-weight: 600;">Consulta nuestro acuerdo de
                                    privacidad aquí.</a></strong></p><br>

                    </div>
                    @if(count($respuestas))
                        <div class="card-action orange lighten-4">
                            <strong class>ENCUESTA REALIZADA</strong>
                        </div>
                    @else
                        <div class="card-action orange lighten-4">
                            <a href="{{route('encuesta.index')}}" class="black-text" style="font-weight: bolder;">Sí, acepto</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @if(session('correcto') == 'ok')
        <script>
            swal({
                title: "GRACIAS POR PARTICIPAR",
                text: "ENVIADO CON ÉXITO",
                icon: 'success',
                dangerMode: true,
                buttons: {
                    accept: 'ACEPTAR'
                }
            }).then(function (willDelete) {
                if (willDelete) {
                    location.reload();

                } else {
                    location.reload();
                }
            });
        </script>
    @endif

@endpush
