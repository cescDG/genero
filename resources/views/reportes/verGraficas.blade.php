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

    <input type="hidden" name="si7" id="si7" value="<?php echo $siP7; ?>">
    <input type="hidden" name="no7" id="no7" value="<?php echo $noP7; ?>">
    <input type="hidden" name="al7" id="al7" value="<?php echo $alP7; ?>">
    <input type="hidden" name="de7" id="de7" value="<?php echo $descoP7; ?>">

    <input type="hidden" name="si8" id="si8" value="<?php echo $siP8; ?>">
    <input type="hidden" name="no8" id="no8" value="<?php echo $noP8; ?>">
    <input type="hidden" name="al8" id="al8" value="<?php echo $alP8; ?>">
    <input type="hidden" name="de8" id="de8" value="<?php echo $descoP8; ?>">

    <input type="hidden" name="si9" id="si9" value="<?php echo $siP9; ?>">
    <input type="hidden" name="no9" id="no9" value="<?php echo $noP9; ?>">
    <input type="hidden" name="al9" id="al9" value="<?php echo $alP9; ?>">
    <input type="hidden" name="de9" id="de9" value="<?php echo $descoP9; ?>">

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

            var siP7 = document.getElementById("si7").value;
            let si7 =  parseInt(siP7);
            var noP7 = document.getElementById("no7").value;
            let no7 =  parseInt(noP7);
            var alP7 = document.getElementById("al7").value;
            let al7 =  parseInt(alP7);
            var deP7 = document.getElementById("de7").value;
            let de7 =  parseInt(deP7);

            var siP8 = document.getElementById("si8").value;
            let si8 =  parseInt(siP8);
            var noP8 = document.getElementById("no8").value;
            let no8 =  parseInt(noP8);
            var alP8 = document.getElementById("al8").value;
            let al8 =  parseInt(alP8);
            var deP8 = document.getElementById("de8").value;
            let de8 =  parseInt(deP8);

            var siP9 = document.getElementById("si9").value;
            let si9 =  parseInt(siP9);
            var noP9 = document.getElementById("no9").value;
            let no9 =  parseInt(noP9);
            var alP9 = document.getElementById("al9").value;
            let al9 =  parseInt(alP9);
            var deP9 = document.getElementById("de9").value;
            let de9 =  parseInt(deP9);

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
                        '¿En su unidad administrativa existe un ambiente de trabajo cordial?',
                        '¿Su jefa(e) inmediato fomenta la igualdad y no discriminación entre mujeres y hombres?',
                        '¿El trato entre mujeres y hombres es respetuoso, sin importar el nivel jerárquico o sexo?\t',
                        '¿Ha sido discriminada(o) por su apariencia física, sexo, edad, discapacidad, condición de salud, estado civil, embarazo o preferencia sexual?',
                        '¿Existen actos, hechos o expresiones que refuercen actitudes de desigualdad entre mujeres y hombres?',
                        '¿Se respeta y promueve la opinión por igual de mujeres y hombres sin distinción en su ámbito de trabajo?',
                        '¿Se respeta y promueve la opinión por igual de mujeres y hombres sin distinción en su ámbito de trabajo?',
                        '¿Ha sentido intimidación o maltrato por causa de su sexo?',
                        '¿Se respeta por igual la autoridad de mujeres y hombres?'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Respuestas'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} SP</b></td></tr>',
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
                    name: 'SÍ',
                    data: [si1, si2,si3, si4, si5, si6, si7, si8, si9]

                }, {
                    name: 'NO',
                    data: [no1, no2, no3, no4, no5, no6, no7, no8, no9]

                }, {
                    name: 'ALGUNAS VECES',
                    data: [al1, al2, al3, al4, al5, al6, al7, al8,al9]

                }, {
                    name: 'DESCONOZCO',
                    data: [de1, de2, de3, de4, de5, de6, de7, de8, de9]

                }]
            });
        })
    </script>
@endpush

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

            var siP7 = document.getElementById("si7").value;
            let si7 =  parseInt(siP7);
            var noP7 = document.getElementById("no7").value;
            let no7 =  parseInt(noP7);
            var alP7 = document.getElementById("al7").value;
            let al7 =  parseInt(alP7);
            var deP7 = document.getElementById("de7").value;
            let de7 =  parseInt(deP7);

            var siP8 = document.getElementById("si8").value;
            let si8 =  parseInt(siP8);
            var noP8 = document.getElementById("no8").value;
            let no8 =  parseInt(noP8);
            var alP8 = document.getElementById("al8").value;
            let al8 =  parseInt(alP8);
            var deP8 = document.getElementById("de8").value;
            let de8 =  parseInt(deP8);

            var siP9 = document.getElementById("si9").value;
            let si9 =  parseInt(siP9);
            var noP9 = document.getElementById("no9").value;
            let no9 =  parseInt(noP9);
            var alP9 = document.getElementById("al9").value;
            let al9 =  parseInt(alP9);
            var deP9 = document.getElementById("de9").value;
            let de9 =  parseInt(deP9);

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
                        '¿En su unidad administrativa existe un ambiente de trabajo cordial?',
                        '¿Su jefa(e) inmediato fomenta la igualdad y no discriminación entre mujeres y hombres?',
                        '¿El trato entre mujeres y hombres es respetuoso, sin importar el nivel jerárquico o sexo?\t',
                        '¿Ha sido discriminada(o) por su apariencia física, sexo, edad, discapacidad, condición de salud, estado civil, embarazo o preferencia sexual?',
                        '¿Existen actos, hechos o expresiones que refuercen actitudes de desigualdad entre mujeres y hombres?',
                        '¿Se respeta y promueve la opinión por igual de mujeres y hombres sin distinción en su ámbito de trabajo?',
                        '¿La asignación de responsabilidades y cargas de trabajo son las mismas para mujeres y hombres en el mismo nivel jerárquico?',
                        '¿Ha sentido intimidación o maltrato por causa de su sexo?',
                        '¿Se respeta por igual la autoridad de mujeres y hombres?'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Servidores Públicos'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} Servidores Públicos </b></td></tr>',
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
                    name: 'SÍ',
                    data: [si1, si2,si3, si4, si5, si6, si7, si8, si9]

                }, {
                    name: 'NO',
                    data: [no1, no2, no3, no4, no5, no6, no7, no8, no9]

                }, {
                    name: 'ALGUNAS VECES',
                    data: [al1, al2, al3, al4, al5, al6, al7, al8,al9]

                }, {
                    name: 'DESCONOZCO',
                    data: [de1, de2, de3, de4, de5, de6, de7, de8, de9]

                }]
            });
        })
    </script>
@endpush
