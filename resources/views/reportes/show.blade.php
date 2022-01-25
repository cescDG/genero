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
                        <input type="text" name="dependencia" id="dependencia" value="<?php echo $id; ?>">
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
                            @php $siP1 = 0; $noP1 = 0;  $alP1 = 0; $descoP1 = 0;@endphp
                            @foreach ($preguntas as $pregunta)
                                <tr>
                                    <td style="text-align-all: justify">{{ $pregunta->texto }}</td>
                                    <td>
                                        @foreach ($sumaA as $key => $value)
                                            @if ($key == $pregunta->id)
                                                {{ $value }}
                                                @if($pregunta->id == 1)
                                                    @php $siP1 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 2)
                                                    @php $siP2 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 3)
                                                    @php $siP3 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 4)
                                                    @php $siP4 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 5)
                                                    @php $siP5 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 6)
                                                    @php $siP6 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 7)
                                                    @php $siP7 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 8)
                                                    @php $siP8 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 9)
                                                    @php $siP9 = $value; @endphp
                                                @endif
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        @foreach ($sumaB as $key => $value)
                                            @if ($key == $pregunta->id)
                                                    {{ $value }}

                                                @if($pregunta->id == 1)
                                                    @php $noP1 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 2)
                                                    @php $noP2 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 3)
                                                    @php $noP3 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 4)
                                                    @php $noP4 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 5)
                                                    @php $noP5 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 6)
                                                    @php $noP6 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 7)
                                                    @php $noP7 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 8)
                                                    @php $noP8 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 9)
                                                    @php $noP9 = $value; @endphp
                                                @endif
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        @foreach ($sumaC as $key => $value)
                                            @if ($key == $pregunta->id)

                                                    {{ $value }}

                                                @if($pregunta->id == 1)
                                                    @php $alP1 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 2)
                                                    @php $alP2 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 3)
                                                    @php $alP3 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 4)
                                                    @php $alP4 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 5)
                                                    @php $alP5 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 6)
                                                    @php $alP6 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 7)
                                                    @php $alP7 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 8)
                                                    @php $alP8 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 9)
                                                    @php $alP9 = $value; @endphp
                                                @endif
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        @foreach ($sumaD as $key => $value)
                                            @if ($key == $pregunta->id)
                                                    {{ $value }}

                                                @if($pregunta->id == 1)
                                                    @php $descoP1 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 2)
                                                    @php $descoP2 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 3)
                                                    @php $descoP3 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 4)
                                                    @php $descoP4 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 5)
                                                    @php $descoP5 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 6)
                                                    @php $descoP6 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 7)
                                                    @php $descoP7 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 8)
                                                    @php $descoP8 = $value; @endphp
                                                @endif
                                                @if($pregunta->id == 9)
                                                    @php $descoP9 = $value; @endphp
                                                @endif
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                @if ($i ==9) @break  @endif
                                @php $i ++ @endphp
                            @endforeach
                            </tbody>
                        </table>
                        @php
                        $sis = [];
                        $nos = [];
                        $als = [];
                        $des = [];


                        if (empty($siP1)){
                            $siP1 = 0;
                        }if (empty($siP2)){
                            $siP2 = 0;
                        }if (empty($siP3)){
                            $siP3 = 0;
                        }if (empty($siP4)){
                            $siP4 = 0;
                        }if (empty($siP5)){
                            $siP5 = 0;
                        }if (empty($siP6)){
                            $siP6 = 0;
                        }if (empty($siP7)){
                            $siP7 = 0;
                        }if (empty($siP8)){
                            $siP8 = 0;
                        }if (empty($siP9)){
                            $siP9 = 0;
                        }
                        $sis = $siP1.'-';
                        $sis = $siP2.'-';
                        $sis = $siP3.'-';
                        $sis = $siP4.'-';
                        $sis = $siP5.'-';
                        $sis = $siP6.'-';
                        $sis = $siP7.'-';
                        $sis = $siP8.'-';
                        $sis = $siP9.'-';

                         if (empty($noP1)){
                            $noP1 = 0;
                        }if (empty($noP2)){
                            $noP2 = 0;
                        }if (empty($noP3)){
                            $noP3 = 0;
                        }if (empty($noP4)){
                            $noP4 = 0;
                        }if (empty($noP5)){
                            $noP5 = 0;
                        }if (empty($noP6)){
                            $noP6 = 0;
                        }if (empty($noP7)){
                            $noP7 = 0;
                        }if (empty($noP8)){
                            $noP8 = 0;
                        }if (empty($noP9)){
                            $noP9 = 0;
                        }
                         $nos = $noP1;
                         $nos = $noP2;
                         $nos = $noP3;
                         $nos = $noP4;
                         $nos = $noP5;
                         $nos = $noP6;
                         $nos = $noP7;
                         $nos = $noP8;
                         $nos = $noP9;

                        if (empty($alP1)){
                            $alP1 = 0;
                        }if (empty($alP2)){
                            $alP2 = 0;
                        }if (empty($alP3)){
                            $alP3 = 0;
                        }if (empty($alP4)){
                            $alP4 = 0;
                        }if (empty($alP5)){
                            $alP5 = 0;
                        }if (empty($alP6)){
                            $alP6 = 0;
                        }if (empty($alP7)){
                            $alP7 = 0;
                        }if (empty($alP8)){
                            $alP8 = 0;
                        }if (empty($alP9)){
                            $alP9 = 0;
                        }
                        $als = $alP1;
                        $als = $alP2;
                        $als = $alP3;
                        $als = $alP4;
                        $als = $alP5;
                        $als = $alP6;
                        $als = $alP7;
                        $als = $alP8;
                        $als = $alP9;

                        if (empty($descoP1)){
                            $descoP1 = 0;
                        }if (empty($descoP2)){
                            $descoP2 = 0;
                        }if (empty($descoP3)){
                            $descoP3 = 0;
                        }if (empty($descoP4)){
                            $descoP4 = 0;
                        }if (empty($descoP5)){
                            $descoP5 = 0;
                        }if (empty($descoP6)){
                            $descoP6 = 0;
                        }if (empty($descoP7)){
                            $descoP7 = 0;
                        }if (empty($descoP8)){
                            $descoP8 = 0;
                        }if (empty($descoP9)){
                            $descoP9 = 0;
                        }
                        $des[] = $descoP1;
                        $des[] = $descoP2;
                        $des[] = $descoP3;
                        $des = $descoP4;
                        $des = $descoP5;
                        $des = $descoP6;
                        $des = $descoP7;
                        $des = $descoP8;
                        $des = $descoP9;
                        @endphp
                        <a href="{{ route('verGrafica', [$id]) }}" target="_blank">  <p style="text-align: right;">Ver gráfico</p></a>
                        <br>
                        <br>
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th><strong><h4>Condiciones de trabajo</h4></strong></th>--}}
{{--                                <th>Sí</th>--}}
{{--                                <th>No</th>--}}
{{--                                <th>Algunas veces</th>--}}
{{--                                <th>Desconozco</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @php $i = 1; @endphp--}}
{{--                            @php $siP1 = 0; $noP1 = 0;  $alP1 = 0; $descoP1 = 0;@endphp--}}
{{--                            @foreach ($preguntas as $preg  )--}}
{{--                                @if ($i >= 10 )--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $preg->texto }}</td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaA as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $siP1 = $siP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaB as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $siP1 = $noP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaC as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $alP1 = $alP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}

{{--                                            @foreach ($sumaD as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $descoP1 = $descoP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endif--}}
{{--                                @if ($i==15)--}}
{{--                                    @break--}}
{{--                                @endif--}}
{{--                                @php--}}
{{--                                    $i ++--}}
{{--                                @endphp--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        <a href="{{ route('verGrafica', [$siP1, $noP1, $alP1, $descoP1, 2]) }}" target="_blank">  <p style="text-align: right;">Ver gráfico</p></a>--}}
{{--                        <br>--}}
{{--                        <br>--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th><strong><h4>Permanencia y promoción</h4></strong></th>--}}
{{--                                <th>Sí</th>--}}
{{--                                <th>No</th>--}}
{{--                                <th>Algunas veces</th>--}}
{{--                                <th>Desconozco</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @php $i = 1; @endphp--}}
{{--                            @php $siP1 = 0; $noP1 = 0;  $alP1 = 0; $descoP1 = 0;@endphp--}}
{{--                            @foreach ($preguntas as $preg  )--}}
{{--                                @if ($i >= 16)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $preg->texto }}</td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaA as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $siP1 = $siP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaB as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $noP1 = $noP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaC as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $alP1 = $alP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}

{{--                                            @foreach ($sumaD as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $descoP1 = $descoP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endif--}}
{{--                                @if ($i==21)--}}
{{--                                    @break--}}
{{--                                @endif--}}
{{--                                @php--}}
{{--                                    $i ++--}}
{{--                                @endphp--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        <a href="{{ route('verGrafica', [$siP1, $noP1, $alP1, $descoP1, 3]) }}" target="_blank">  <p style="text-align: right;">Ver gráfico</p></a>--}}
{{--                        <br>--}}
{{--                        <br>--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th><strong><h4>Capacitación y formación</h4></strong></th>--}}
{{--                                <th>Sí</th>--}}
{{--                                <th>No</th>--}}
{{--                                <th>Algunas veces</th>--}}
{{--                                <th>Desconozco</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @php $i = 1; @endphp--}}
{{--                            @php $siP1 = 0; $noP1 = 0;  $alP1 = 0; $descoP1 = 0;@endphp--}}
{{--                            @foreach ($preguntas as $preg  )--}}
{{--                                @if ($i >= 22)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $preg->texto }}</td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaA as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $siP1 = $siP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaB as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $noP1 = $noP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaC as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $alP1 = $alP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}

{{--                                            @foreach ($sumaD as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $descoP1 = $descoP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endif--}}
{{--                                @if ($i==27)--}}
{{--                                    @break--}}
{{--                                @endif--}}
{{--                                @php--}}
{{--                                    $i ++--}}
{{--                                @endphp--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        <a href="{{ route('verGrafica', [$siP1, $noP1, $alP1, $descoP1, 4]) }}" target="_blank">  <p style="text-align: right;">Ver gráfico</p></a>--}}
{{--                        <br>--}}
{{--                        <br>--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th><strong><h4>Corresponsabilidad entre la vida laboral, familiar y personal</h4></strong></th>--}}
{{--                                <th>Sí</th>--}}
{{--                                <th>No</th>--}}
{{--                                <th>Algunas veces</th>--}}
{{--                                <th>Desconozo</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @php $i = 1; @endphp--}}
{{--                            @php $siP1 = 0; $noP1 = 0;  $alP1 = 0; $descoP1 = 0;@endphp--}}
{{--                            @foreach ($preguntas as $preg  )--}}
{{--                                @if ($i >= 28)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $preg->texto }}</td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaA as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $siP1 = $siP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaB as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $noP1 = $noP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @foreach ($sumaC as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $alP1 = $alP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}

{{--                                            @foreach ($sumaD as $key => $value)--}}
{{--                                                @if ($key == $preg->id)--}}
{{--                                                    {{ $value }}--}}
{{--                                                    @php $descoP1 = $descoP1 + $value; @endphp--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endif--}}
{{--                                @if ($i==35)--}}
{{--                                    @break--}}
{{--                                @endif--}}
{{--                                @php--}}
{{--                                    $i ++--}}
{{--                                @endphp--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col s12">--}}
{{--                                <a href="{{ route('verGrafica', [$siP1, $noP1, $alP1, $descoP1, 5]) }}" target="_blank"> <p style="text-align: right;">Ver gráfico</p></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

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

        function vermapa(){
            alert("funcion");
        }
        </script>


@endpush
