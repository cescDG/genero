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
                    <figure class="highcharts-figure">
                        <div id="container"></div>
                        <p class="highcharts-description">
                          A basic column chart compares rainfall values between four cities.
                          Tokyo has the overall highest amount of rainfall, followed by New York.
                          The chart is making use of the axis crosshair feature, to highlight
                          months as they are hovered over.
                        </p>
                      </figure>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
        <script>
            $(document).ready(function() {
                var chart = Highcharts.chart('container', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Monthly Average Rainfall'
                        },
                        subtitle: {
                            text: 'Source: WorldClimate.com'
                        },
                        xAxis: {
                            categories: [
                                'Jan',
                                'Feb',
                                'Mar',
                                'Apr',
                                'May',
                                'Jun',
                                'Jul',
                                'Aug',
                                'Sep',
                                'Oct',
                                'Nov',
                                'Dec'
                            ],
                            crosshair: true
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: 'Rainfall (mm)'
                            }
                        },
                        tooltip: {
                            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                            footerFormat: '</table>',
                            shared: true,
                            useHTML: true
                        },
                        plotOptions: {
                            column: {
                                pointPadding: 0.2,
                                borderWidth: 0
                            }
                        },
                        series: [{
                            name: 'Tokyo',
                            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

                        }, {
                            name: 'New York',
                            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

                        }, {
                            name: 'London',
                            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

                        }, {
                            name: 'Berlin',
                            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

                        }]
                    });

            })
    </script>
@endpush
