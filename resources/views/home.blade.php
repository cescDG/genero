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
                <a href="{{route('libros.index')}}"><i class="material-icons" style="color:#ec731e; ">book</i><span data-i18n="Modern Menu">Prestamo de libros</span></a>
            </div>
        </div>
        <div class="row">
            <div class="input-field col m2"></div>
            <div class="input-field col m8">
                <div class="card-alert card orange lighten-5">
                    <div class="card-content orange-text darken-1">
                        <br>
                        <p align="justify" style="color: black;">El presente diagnóstico permitirá visibilizar situaciones desigualdad individual y colectiva entre mujeres y hombres al interior del Poder Legislativo,
                            con el propósito de establecer buenas prácticas que promuevan una cultura institucional que integre como principio básico la igualdad y se reduzcan las brechas de inequidad
                            y discriminación en su espacio laboral.<br>

                            Manifieste las respuestas que mejor describan las posibles situaciones que percibe o siente actualmente en su unidad administrativa de adscripción.</p>
                        <br><br>
                        <p style="color: black;">A continuación, selecciona la casilla para
                            aceptar términos y condiciones de privacidad y uso de
                            información. <a
                                href="{{asset('genero/pdf/Aviso.pdf')}}" target="_blank"
                                style="color: #8A084B !important; font-weight: 600;">Consulta nuestro acuerdo de privacidad aquí.</a></p>
                    </div>
                    @if(count($respuestas))
                    <div class="card-action orange lighten-4">
                        <strong class>ENCUESTA REALIZADA</strong>
                    </div>
                    @else
                    <div class="card-action orange lighten-4">
                        <a href="{{route('encuesta.index')}}" class="black-text">Sí, acepto</a>
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
            }).then(function(willDelete) {
            if (willDelete) {
                location.reload();

            } else {
                location.reload();
            }
            });
        </script>
    @endif

@endpush
