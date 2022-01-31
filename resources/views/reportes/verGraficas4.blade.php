@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <input type="hidden" name="si1" id="si1" value="<?php echo $siP1; ?>">
    <input type="hidden" name="no1" id="no1" value="<?php echo $noP1; ?>">
    <input type="hidden" name="al1" id="al1" value="<?php echo $alP1; ?>">
    <input type="hidden" name="de1" id="de1" value="<?php echo $descoP1; ?>">

    <input type="hidden" name="si2" id="si2" value="<?php echo $siP2; ?>">
    <input type="hidden" name="no2" id="no2" value="<?php echo $noP2; ?>">
    <input type="hidden" name="al2" id="al2" value="<?php echo $alP2; ?>">
    <input type="hidden" name="de2" id="de2" value="<?php echo $descoP2; ?>">

    <input type="hidden" name="si3" id="si3" value="<?php echo $siP3; ?>">
    <input type="hidden" name="no3" id="no3" value="<?php echo $noP3; ?>">
    <input type="hidden" name="al3" id="al3" value="<?php echo $alP3; ?>">
    <input type="hidden" name="de3" id="de3" value="<?php echo $descoP3; ?>">

    <input type="hidden" name="si4" id="si4" value="<?php echo $siP4; ?>">
    <input type="hidden" name="no4" id="no4" value="<?php echo $noP4; ?>">
    <input type="hidden" name="al4" id="al4" value="<?php echo $alP4; ?>">
    <input type="hidden" name="de4" id="de4" value="<?php echo $descoP4; ?>">

    <input type="hidden" name="si5" id="si5" value="<?php echo $siP5; ?>">
    <input type="hidden" name="no5" id="no5" value="<?php echo $noP5; ?>">
    <input type="hidden" name="al5" id="al5" value="<?php echo $alP5; ?>">
    <input type="hidden" name="de5" id="de5" value="<?php echo $descoP5; ?>">

    <input type="hidden" name="si6" id="si6" value="<?php echo $siP6; ?>">
    <input type="hidden" name="no6" id="no6" value="<?php echo $noP6; ?>">
    <input type="hidden" name="al6" id="al6" value="<?php echo $alP6; ?>">
    <input type="hidden" name="de6" id="de6" value="<?php echo $descoP6; ?>">

    <input type="hidden" name="tit" id="tit" value="<?php echo $tit; ?>">

    <figure class="highcharts-figure">
    <div id="container"></div>
    </figure>

@endsection


@push('scripts')

    <script>
        $(document).ready(function() {
            var siP = document.getElementById("si1").value;
            let si1 =  parseInt(siP);
            var noP = document.getElementById("no1").value;
            let no1 =  parseInt(noP);
            var alP = document.getElementById("al1").value;
            let al1 =  parseInt(alP);
            var deP = document.getElementById("de1").value;
            let de1 =  parseInt(deP);

            var siP2 = document.getElementById("si2").value;
            let si2 =  parseInt(siP2);
            var noP2 = document.getElementById("no2").value;
            let no2 =  parseInt(noP2);
            var alP2 = document.getElementById("al2").value;
            let al2 =  parseInt(alP2);
            var deP2 = document.getElementById("de2").value;
            let de2 =  parseInt(deP2);

            var siP3 = document.getElementById("si3").value;
            let si3 =  parseInt(siP3);
            var noP3 = document.getElementById("no3").value;
            let no3 =  parseInt(noP3);
            var alP3 = document.getElementById("al3").value;
            let al3 =  parseInt(alP3);
            var deP3 = document.getElementById("de3").value;
            let de3 =  parseInt(deP3);

            var siP4 = document.getElementById("si4").value;
            let si4 =  parseInt(siP4);
            var noP4 = document.getElementById("no4").value;
            let no4 =  parseInt(noP4);
            var alP4 = document.getElementById("al4").value;
            let al4 =  parseInt(alP4);
            var deP4 = document.getElementById("de4").value;
            let de4 =  parseInt(deP4);

            var siP5 = document.getElementById("si5").value;
            let si5 =  parseInt(siP5);
            var noP5 = document.getElementById("no5").value;
            let no5 =  parseInt(noP5);
            var alP5 = document.getElementById("al5").value;
            let al5 =  parseInt(alP5);
            var deP5 = document.getElementById("de5").value;
            let de5 =  parseInt(deP5);

            var siP6 = document.getElementById("si6").value;
            let si6 =  parseInt(siP6);
            var noP6 = document.getElementById("no6").value;
            let no6 =  parseInt(noP6);
            var alP6 = document.getElementById("al6").value;
            let al6 =  parseInt(alP6);
            var deP6 = document.getElementById("de6").value;
            let de6 =  parseInt(deP6);

            var titulo = document.getElementById("tit").value;


            var chart = Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: titulo
                },
                xAxis: {
                    categories: [
                        '¿Ha recibido capacitación básica en materia de género?',
                        '¿La capacitación y formación se ofertan por igual a mujeres y hombres?',
                        '¿Le interesa capacitarse en temas con enfoque de género y derechos humanos?',
                        '¿Considera que los temas de género son sólo para mujeres?',
                        '¿Ha participado en cursos o talleres de sensibilización o desarrollo que promuevan igualdad de trato y oportunidades entre mujeres y hombres?',
                        '¿Cuándo recibe alguna capacitación en el tema de género, le permite reflexionar sobre su actuar?'
                    ],
                 //   crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Servidores Públicos'
                    },
                    stackLabels: {
                        enabled: true,
                        style: {
                            fontWeight: 'bold',
                            color: ( // theme
                                Highcharts.defaultOptions.title.style &&
                                Highcharts.defaultOptions.title.style.color
                            ) || 'gray'
                        }
                    }
                },
                legend: {
                    align: 'right',
                    x: -30,
                    verticalAlign: 'top',
                    y: 25,
                    floating: true,
                    backgroundColor:
                        Highcharts.defaultOptions.legend.backgroundColor || 'white',
                    borderColor: '#CCC',
                    borderWidth: 1,
                    shadow: false
                },
                tooltip: {
                    headerFormat: '<b>{point.x}</b><br/>',
                    pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                },
                plotOptions: {
                    column: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                series: [{
                    name: 'SÍ',
                    data: [si1, si2,si3, si4, si5, si6]

                }, {
                    name: 'NO',
                    data: [no1, no2, no3, no4, no5, no6]

                }, {
                    name: 'ALGUNAS VECES',
                    data: [al1, al2, al3, al4, al5, al6]

                }, {
                    name: 'DESCONOZCO',
                    data: [de1, de2, de3, de4, de5, de6]

                }]
            });
        })
    </script>
@endpush
