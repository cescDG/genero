@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <style>
        .imagen:hover{
            border-radius:50%;
            -webkit-border-radius:10%;
            box-shadow: 0px 0px 15px 15px #ec731e;
            -webkit-box-shadow: 0px 0px 15px 15px #ec731e;
            -webkit-transform:scale(1.3);
            transform:scale(1.3)
        }
    </style>

    <div class="card-body">
        <div class="row">
            <div class="input-field col m1"></div>
            <div class="input-field col m10">
                <input type="text" name="buscar" id="buscar" placeholder="Buscar" style="border-radius: 15px;" onkeyup="pucho();">
            </div>
        </div>
        <div id="busqueda"></div>

        <div class="row">
            @foreach($libros as $libro)
                <div class="col m4">
                    <h1 style="text-align: center">{{$libro->nombre}}</h1>
                    <center>
                        @if(isset($libro->disponible))
                            <img class="imagen" src="{{ asset('genero/images/libros/'.$libro->id.'.png')}}" width="50%" height="50%"  alt="name" class="circle" title="Titulo: {{$libro->nombre}} / Autor: {{$libro->autor}}"><br>
                            <strong>Disponible a partir del {{$libro->disponible}}</strong>
                        @else
                        <a href="{{route('solicitar', [$libro->id])}}">
                            <img class="imagen" src="{{ asset('genero/images/libros/'.$libro->id.'.png')}}" width="50%" height="50%"  alt="name" class="circle" title="Titulo: {{$libro->nombre}} / Autor: {{$libro->autor}}"><br>
                            <strong>Disponible</strong>
                        </a>
                        @endif
                    </center>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@push('script')
    <script type="text/javascript">
        function pucho(){
            alert("holi")
            var busca = document.getElementById("buscar").value;
            alert(busca)
            {{--$.ajax({--}}
            {{--    type: 'GET',--}}
            {{--    data :{busca},--}}
            {{--    url :   "{{ url('busquedaLibro') }}",--}}
            {{--    // success: function (response) {--}}
            {{--    //   //  location.reload();--}}
            {{--    //     console.log('si');--}}
            {{--    // },error: function(xhr, status, error) {--}}
            {{--    //     console.log('no');--}}
            {{--    // }--}}
            {{--});--}}
        }

    </script>
@endpush
