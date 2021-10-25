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
            <div class="card">
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
                    a
                    <div class="row">
                        <div class="col-12" align="center">
                            @foreach ($libros as $libro)
                                <div class="input-field col s4">
                                    <div class="form-group">
                                   
                                        <center>
                                            @if ($libro->disponible)
                                                <img class="imagen"
                                                    src="{{ asset('genero/images/libros/' . $libro->id . '.png') }}"
                                                    style="
                                                width: 190px;
                                                height: 190px;
                                               " title="Titulo: {{ $libro->nombre }} / Autor: {{ $libro->autor }}">
                                                <br>
                                                <strong>Disponible a partir del {{ $libro->disponible }}</strong>
                                            @else
                                                <a href="{{ route('solicitar', [$libro->id]) }}">
                                                    <img class="imagen"
                                                        src="{{ asset('genero/images/libros/' . $libro->id . '.png') }}"
                                                        style="
                                                width: 190px;
                                                height: 190px;
                                               " alt="name" class="circle"
                                                        title="Titulo: {{ $libro->nombre }} / Autor: {{ $libro->autor }}"><br>
                                                    <strong>Disponible</strong>
                                                </a>
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
        function buscarL() {
            var search = $("#buscarLib").val();
            console.log('holi');
            console.log(search);

            if (search == '') {
                var search ='o';
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
                beforeSend: function() {},
                success: function(response) {
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
