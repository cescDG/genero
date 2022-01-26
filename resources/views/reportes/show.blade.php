<div class="card-body">
    <div class="container">
        <div class="section">
            <div class="height-30vh">

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="section">
        <div class="card">
            <div class="section section-data-tables">
                <div class="row">
                    <div class="col s12">
                        <h4 align="center">{{$ubicacion->Nombre}}</h4>
                        <input type="hidden" name="dependencia" id="dependencia" value="<?php echo $id; ?>">
                        @php $i = 1;@endphp
                        <table>
                            <thead>
                            <tr>
                                <th><strong><h3>Ambiente de trabajo y discriminación</h3></strong></th>
                                <th>Sí</th>
                                <th>No</th>
                                <th>Algunas veces</th>
                                <th>Desconozco</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($preguntas as $pregunta)
                                <tr>
                                    <td style="text-align-all: justify">{{ $pregunta->texto }}</td>
                                    <td>
                                        @foreach ($sumaA as $key => $value)
                                            @if ($key == $pregunta->id)
                                                {{ $value }}
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        @foreach ($sumaB as $key => $value)
                                            @if ($key == $pregunta->id)
                                                    {{ $value }}
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        @foreach ($sumaC as $key => $value)
                                            @if ($key == $pregunta->id)
                                                    {{ $value }}
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        @foreach ($sumaD as $key => $value)
                                            @if ($key == $pregunta->id)
                                                    {{ $value }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                @if ($i ==9) @break  @endif
                                @php $i ++ @endphp
                            @endforeach
                            </tbody>
                        </table>

                        <a href="{{ route('verGrafica', [$id]) }}" target="_blank">  <p style="text-align: right;">Ver gráfico</p></a>
                        <br>
                        <br>
                        <table>
                            <thead>
                            <tr>
                                <th><strong><h4>Condiciones de trabajo</h4></strong></th>
                                <th>Sí</th>
                                <th>No</th>
                                <th>Algunas veces</th>
                                <th>Desconozco</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @foreach ($preguntas as $preg  )
                                @if ($i >= 10 )
                                    <tr>
                                        <td>{{ $preg->texto }}</td>
                                        <td>
                                            @foreach ($sumaA as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($sumaB as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($sumaC as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>

                                            @foreach ($sumaD as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endif
                                @if ($i==15)
                                    @break
                                @endif
                                @php
                                    $i ++
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('verGrafica2', [$id]) }}" target="_blank">  <p style="text-align: right;">Ver gráfico</p></a>
                        <br>
                        <br>
                        <table>
                            <thead>
                            <tr>
                                <th><strong><h4>Permanencia y promoción</h4></strong></th>
                                <th>Sí</th>
                                <th>No</th>
                                <th>Algunas veces</th>
                                <th>Desconozco</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @foreach ($preguntas as $preg  )
                                @if ($i >= 16)
                                    <tr>
                                        <td>{{ $preg->texto }}</td>
                                        <td>
                                            @foreach ($sumaA as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($sumaB as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($sumaC as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>

                                            @foreach ($sumaD as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endif
                                @if ($i==21)
                                    @break
                                @endif
                                @php
                                    $i ++
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('verGrafica3', [$id]) }}" target="_blank">  <p style="text-align: right;">Ver gráfico</p></a>
                        <br>
                        <br>
                        <table>
                            <thead>
                            <tr>
                                <th><strong><h4>Capacitación y formación</h4></strong></th>
                                <th>Sí</th>
                                <th>No</th>
                                <th>Algunas veces</th>
                                <th>Desconozco</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @foreach ($preguntas as $preg  )
                                @if ($i >= 22)
                                    <tr>
                                        <td>{{ $preg->texto }}</td>
                                        <td>
                                            @foreach ($sumaA as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($sumaB as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($sumaC as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>

                                            @foreach ($sumaD as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endif
                                @if ($i==27)
                                    @break
                                @endif
                                @php
                                    $i ++
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('verGrafica4', [$id]) }}" target="_blank">  <p style="text-align: right;">Ver gráfico</p></a>
                        <br>
                        <br>
                        <table>
                            <thead>
                            <tr>
                                <th><strong><h4>Corresponsabilidad entre la vida laboral, familiar y personal</h4></strong></th>
                                <th>Sí</th>
                                <th>No</th>
                                <th>Algunas veces</th>
                                <th>Desconozo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1; @endphp
                            @foreach ($preguntas as $preg  )
                                @if ($i >= 28)
                                    <tr>
                                        <td>{{ $preg->texto }}</td>
                                        <td>
                                            @foreach ($sumaA as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($sumaB as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($sumaC as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>

                                            @foreach ($sumaD as $key => $value)
                                                @if ($key == $preg->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endif
                                @if ($i==35)
                                    @break
                                @endif
                                @php
                                    $i ++
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col s12">
                                <a href="{{ route('verGrafica5', [$id]) }}" target="_blank"> <p style="text-align: right;">Ver gráfico</p></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script type="text/javascript">
        function searchDep(){
            var dep = $("#dependencia_id").val();
            console.log(dep);
            $.ajax({
                type: 'GET',
                url :   "{{ url('getDep') }}"+"/" + dep,
                beforeSend: function() {
                },
                success:  function (response) {
                   // $("#containerChart").Highcharts.chart('container', {

                },error(){
                    alert('error');
                }
            });
        }

        </script>


@endpush
