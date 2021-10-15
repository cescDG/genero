@extends('layout')
@section('title')
    INICIO
@endsection
@section('content')
HOLA MUNDOdsffdsdfs
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
