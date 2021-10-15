@extends('layout')
@section('title')
    INICIO
@endsection
@section('content')

    <div id="contenedor">
        <br>
        <div class="row">
            <div class="input-field col m2"></div>
            <div class="input-field col m8">
                <div class="card-alert card orange lighten-5">
                    <div class="card-content orange-text darken-1">
                        <p align="justify">El presente diagnóstico permitirá
                            visibilizar situaciones de asimetría individual y colectiva
                            entre mujeres y hombres al interior del Poder Legislativo
                            con el propósito de reducir brechas de desigualdad y
                            discriminación en su espacio laboral, asimismo la
                            consolidación de buenas prácticas que promuevan una cultura
                            institucional que integre, como principio básico, la
                            igualdad entre sexos.<br><br>
                            A continuación, se presenta un listado de posibles
                            situaciones que puede estar viviendo. Manifieste las
                            respuestas que mejor describan lo que percibe o siente
                            actualmente en su unidad administrativa de adscripción.</p>
                        <br><br>
                        <p>A continuación, selecciona la casilla para
                            aceptar términos y condiciones de privacidad y uso de
                            información. <a
                                href="http://administracionyfinanzasplem.gob.mx/Documentos/Sistema%20Integral%20de%20Profesionalizacion%20y%20Desarrollo%20de%20Personal.pdf"
                                style="color: #8A084B !important; font-weight: 600;">Consulta nuestro acuerdo de privacidad aquí.</a></p>
                    </div>
                    <div class="card-action orange lighten-4">
                        <a href="{{route('encuesta.index')}}" class="orange-text">Sí, acepto</a>
                        <a href="#" class="orange-text">Cancel</a>
                    </div>
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
