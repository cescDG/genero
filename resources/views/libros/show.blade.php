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
            <div>
                <div class="row"  style="background-color: rgba(198, 198, 198, .5);">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-content">
                                <center>
                                <img style="width: 90%;"
                                     src="{{ asset('generos/images/logo/banner_logos.png' ) }}">
                                    </center>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="background-color: rgba(198, 198, 198, .5);">

                        <div class="col s12">
                            <nav>
                                <div class="nav-wrapper">
                                    <form>
                                        <div class="input-field">
                                            <input type="search" id="buscarLib" name="buscarLib" onkeyup="buscarL();">
                                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                            <i class="material-icons">close</i>
                                        </div>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div id='showLib' style="display: none;"></div>
                <div id='showLib1'>
                    <br><br>
                        @php $imagen = 1;
                             $libro = 0;
                        @endphp
                        @for ($i= 0; $i <= count($libros); $i++)
                        <div class="row">
                                @for ($a= 1; $a <= 3; $a++)
                                @if($libro >= 40)
                                    @php break; @endphp
                                @endif
                                    <div class="col m4">
                                        <div class="form-group">
                                            <center>
                                                @if ($libros[$libro]->disponible)
                                                    <img class="materialboxed"
                                                         src="{{ asset('generos/images/libros/' . $imagen . '.png') }}"
                                                         style="
                                                    width: 70%;
                                                   " alt="name" class="circle"
                                                         title="Titulo: {{ $libros[$libro]->nombre }} / Autor: {{ $libros[$libro]->autor }}">
                                                    <a disabled class="waves-effect waves-light btn"
                                                       href="{{ route('solicitar', [$libros[$libro]->id]) }}"><i
                                                            class="material-icons left">help</i>Disponible
                                                        el {{ $libros[$libro]->disponible }}</a>
                                                    <br>
                                                    <br>
                                                @else
                                                    <img class="materialboxed"
                                                         src="{{ asset('generos/images/libros/' . $imagen . '.png') }}"
                                                         style="
                                                    width: 70%;
                                                   " alt="name" class="circle"
                                                         title="Titulo: {{ $libros[$libro]->nombre }} / Autor: {{ $libros[$libro]->autor }}">

                                                    <a class="waves-effect waves-light btn"
                                                       href="{{ route('solicitar', [$libros[$libro]->id]) }}"><i
                                                            class="material-icons left">cloud</i>Disponible</a>
                                                    <br>
                                                    <br>
                                                @endif
                                            </center>
                                        </div>
                                    </div>
                                    @php $imagen = $imagen+1;  $libro = $libro+1; @endphp
                                @endfor
                        </div>
                        @endfor
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

        function buscarL() {
            var search = $("#buscarLib").val();
            console.log('holi');
            console.log(search + '******************');

            if (search == '') {
                var search = 'o';
                 $("#showLib1").show();
                 $("#showLib").hide();
            }

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
