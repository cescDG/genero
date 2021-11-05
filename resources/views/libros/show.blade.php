@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <style>
        .imagen:hover {
            border-radius: 50%;
            -webkit-border-radius: 10%;
            box-shadow: 0px 0px 15px 15px #ec731e;
            -webkit-box-shadow: 0px 0px 15px 15px #ec731e;
            -webkit-transform: scale(1.4);
            transform: scale(1.4)
        }

    </style>



    <div class="container">
        <div class="section">
            <div >
                <div class="col s12">
                    <div id="search-wrapper" class="card z-depth-0 search-image center-align p-35">
                        <div class="card-content">
                            <h5 class="center-align mb-3">Búsqueda</h5>
                            <input placeholder="Ingresa búsqueda..." id="buscarLib" name="buscarLib"
                                   class="search-box validate white search-circle search-shadow" onkeyup="buscarL();">
                        </div>
                    </div>
                </div>
                <div id='showLib' style="display: none;"></div>
                <div id='showLib1'>
                    <div class="row">
                        <div class="col-12" align="center">
                            @foreach ($libros as $libro)
                                <div class="grid-example col s12 m3">
                                    <div class="form-group">
                                        <center>
                                            @if ($libro->disponible)


                                                <img class="materialboxed"
                                                     src="{{ asset('genero/images/libros/' . $libro->id . '.png') }}"
                                                     style="
                                                width: 200px;
                                                height: 200px;
                                               " alt="name" class="circle"
                                                     title="Titulo: {{ $libro->nombre }} / Autor: {{ $libro->autor }}">


                                                <a disabled class="waves-effect waves-light btn"
                                                   href="{{ route('solicitar', [$libro->id]) }}"><i
                                                        class="material-icons left">help</i>Disponible el {{ $libro->disponible }}</a>


                                            @else

                                                <img class="materialboxed"
                                                     src="{{ asset('genero/images/libros/' . $libro->id . '.png') }}"
                                                     style="
                                                width: 200px;
                                                height: 200px;
                                               " alt="name" class="circle"
                                                     title="Titulo: {{ $libro->nombre }} / Autor: {{ $libro->autor }}">
                                                <a class="waves-effect waves-light btn"
                                                   href="{{ route('solicitar', [$libro->id]) }}"><i
                                                        class="material-icons left">cloud</i>Disponible</a>
                                            @endif
                                        </center>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
@push('scripts')




    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function () {
            $('.materialboxed').materialbox();
        });

    </script>



    <script type="text/javascript">
        function buscarL() {
            var search = $("#buscarLib").val();
            console.log('holi');
            console.log(search);

            if (search == '') {
                var search = 'o';
                // $("#showLib1").show();
                // $("#showLib").hide();
            }
            console.log(search);
            $.ajax({
                type: 'GET',
                url: "{{ url('getLibros') }}",
                data: {
                    search
                },
                beforeSend: function () {
                },
                success: function (response) {
                    $("#showLib1").hide();
                    $("#showLib").show();
                    $("#showLib").html(response);
                },
                error() {
                    console.log('Falló con exito');
                }
            });


        }
    </script>
@endpush
