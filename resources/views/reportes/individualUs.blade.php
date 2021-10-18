@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <div class="container">
        <div class="section">
            <div class="card">
                <div class="section section-data-tables">
                    <div class="row">
                        <div class="col s12">
                            @if(count($reporte))
                                <h3 class="card-title mb-0"><strong>DIAGNÓSTICO DE IGUALDAD DE TRATO Y OPORTUNIDADES ENTRE MUJERES Y HOMBRES</strong></h3>

                                <p style="text-align: justify">El presente diagnóstico permitirá visibilizar situaciones de asimetría individual y colectiva entre mujeres y hombres al interior del Poder Legislativo con el propósito de reducir brechas de desigualdad y discriminación en su espacio laboral, asimismo la consolidación de buenas prácticas que promuevan una cultura institucional que integre, como principio básico, la igualdad entre sexos.</p><br>
                                <p style="text-align: justify">A continuación, se presenta un listado de posibles situaciones que puede estar viviendo. Manifieste las respuestas que mejor describan lo que percibe o siente actualmente en su unidad administrativa de adscripción.</p><br>

                                <table id="striped" class="display">
                                    <thead>
                                    <tr style="background: #96124B;">
                                        <th  style="color: white;">Pregunta</th>
                                        <th  style="color: white;">Sí</th>
                                        <th  style="color: white;">No</th>
                                        <th  style="color: white;">Algunas veces</th>
                                        <th  style="color: white;">Desconozco</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ( $reporte as $report)
                                        <tr>
                                            <th align="justify">{{$report->preguntas->texto}}</th>
                                            <th align="justify">
                                                @if($report->respuesta == 'A')
                                                    1
                                                @else
                                                    0
                                                @endif
                                            </th>
                                            <th align="justify">
                                                @if($report->respuesta == 'B')
                                                    1
                                                @else
                                                    0
                                                @endif
                                            </th>
                                            <th>
                                                @if($report->respuesta == 'C')
                                                    1
                                                @else
                                                    0
                                                @endif
                                            </th>
                                            <th>
                                                @if($report->respuesta == 'D')
                                                    1
                                                @else
                                                    0
                                                @endif
                                            </th>
                                        </tr>
                                    @endforeach
                                    <tr style="background: #96124B;">
                                        <th style="color: white;"><strong>Total</strong></th>
                                        <th  style="color: white;"><strong>{{$si}}</strong></th>
                                        <th style="color: white;"><strong>{{$no}}</strong></th>
                                        <th style="color: white;"><strong>{{$alg}}</strong></th>
                                        <th style="color: white;"><strong>{{$desco}}</strong></th>
                                    </tr>
                                </tbody>
                            </table>
                            @else
                                <h4 class="text-align center">NO HAY REGISTRO AUN</h4>
                            @endif
                        </div>
                    </div>
                       <div style="height: 400px; width: 900px; margin: auto;">
                           <canvas id="barChart"></canvas>
                       </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
        <script>
            $(document).ready(function() {
            alert("goli");
                var datas = <?php echo json_encode($datas);?>
                alert(datas);
                var barCanvas = $("#barChart");
                var barChart = new  Chart(barCanvas,{
                    type: 'bar',
                    data:{
                        labels:['Sí','No','Algunas veces','Desconozco'],
                        datasets:[
                            {
                                label: 'PRUEBAS',
                                data: datas,
                                backgroundColor:['red','blue','black','pink']
                            }
                        ]
                    },
                    options:{
                        scales:{
                            yAxes:[{
                                ticks:{
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                })
        })
    </script>
@endpush
