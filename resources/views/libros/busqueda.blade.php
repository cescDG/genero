@if (count($libros))
    <div class="row">
        @foreach ($libros as $libro)
        <div class="input-field col s4">
            <div class="form-group">
                {{-- <h1 style="text-align: center">{{ $libro->nombre }}</h1> --}}
                <center>
                    @if (isset($libro->disponible))
                        <img class="imagen"
                            src="{{ asset('genero/images/libros/' . $libro->id . '.png') }}"
                           style="
                        width: 190px;
                        height: 190px;
                       "
                            title="Titulo: {{ $libro->nombre }} / Autor: {{ $libro->autor }}">
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

@else
    <div class="section p-0 m-0 height-100vh section-maintenance">
        <div class="row">
            <div id="maintenance" class="col s12 center-align white">
                <img src="{{ asset('genero/images/logo/pato.png') }}" class="responsive-img maintenance-img" width="100"
                    height="100" alt="">
                <h4 class="error-code">Lo sentimos</h4>
                <h6 class="mb-2 mt-2">La búsqueda no arrojó ningún resultado.</h6>
            </div>
        </div>
    </div>
@endif
