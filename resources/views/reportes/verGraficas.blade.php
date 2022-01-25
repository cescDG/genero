@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <input type="text" name="si1" id="si1" value="<?php echo $si1; ?>">
    <input type="text" name="no1" id="no1" value="<?php echo $no1; ?>">
    <input type="text" name="al1" id="al1" value="<?php echo $al1; ?>">
    <input type="text" name="de1" id="de1" value="<?php echo $des1; ?>">

    <input type="text" name="si2" id="si2" value="<?php echo $si2; ?>">
    <input type="text" name="no2" id="no2" value="<?php echo $no2; ?>">
    <input type="text" name="al2" id="al2" value="<?php echo $al2; ?>">
    <input type="text" name="de2" id="de2" value="<?php echo $des2; ?>">

    <input type="text" name="si3" id="si3" value="<?php echo $si3; ?>">
    <input type="text" name="no3" id="no3" value="<?php echo $no3; ?>">
    <input type="text" name="al3" id="al3" value="<?php echo $al3; ?>">
    <input type="text" name="de3" id="de3" value="<?php echo $des3; ?>">

    <input type="text" name="si4" id="si4" value="<?php echo $si4; ?>">
    <input type="text" name="no4" id="no4" value="<?php echo $no4; ?>">
    <input type="text" name="al4" id="al4" value="<?php echo $al4; ?>">
    <input type="text" name="de4" id="de4" value="<?php echo $des4; ?>">

    <input type="text" name="si5" id="si5" value="<?php echo $si5; ?>">
    <input type="text" name="no5" id="no5" value="<?php echo $no5; ?>">
    <input type="text" name="al5" id="al5" value="<?php echo $al5; ?>">
    <input type="text" name="de5" id="de5" value="<?php echo $des5; ?>">

    <input type="text" name="si6" id="si6" value="<?php echo $si6; ?>">
    <input type="text" name="no6" id="no6" value="<?php echo $no6; ?>">
    <input type="text" name="al6" id="al6" value="<?php echo $al6; ?>">
    <input type="text" name="de6" id="de6" value="<?php echo $des6; ?>">

    <input type="text" name="si7" id="si7" value="<?php echo $si7; ?>">
    <input type="text" name="no7" id="no7" value="<?php echo $no7; ?>">
    <input type="text" name="al7" id="al7" value="<?php echo $al7; ?>">
    <input type="text" name="de7" id="de7" value="<?php echo $des7; ?>">

    <input type="text" name="si8" id="si8" value="<?php echo $si8; ?>">
    <input type="text" name="no8" id="no8" value="<?php echo $no8; ?>">
    <input type="text" name="al8" id="al8" value="<?php echo $al8; ?>">
    <input type="text" name="de8" id="de8" value="<?php echo $des8; ?>">

    <input type="text" name="si9" id="si9" value="<?php echo $si9; ?>">
    <input type="text" name="no9" id="no9" value="<?php echo $no9; ?>">
    <input type="text" name="al9" id="al9" value="<?php echo $al9; ?>">
    <input type="text" name="de9" id="de9" value="<?php echo $des9; ?>">

    <input type="hidden" name="tit" id="tit" value="<?php echo $tit; ?>">

    <figure class="highcharts-figure">
    <div id="container"></div>
    </figure>

@endsection


{{--@push('scripts')--}}

{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            var siP = document.getElementById("si1").value;--}}
{{--            let si1 =  parseInt(siP);--}}
{{--            var noP = document.getElementById("no1").value;--}}
{{--            let no1 =  parseInt(noP);--}}
{{--            var alP = document.getElementById("al1").value;--}}
{{--            let al1 =  parseInt(alP);--}}
{{--            var deP = document.getElementById("de1").value;--}}
{{--            let de1 =  parseInt(deP);--}}

{{--            var siP2 = document.getElementById("si2").value;--}}
{{--            let si2 =  parseInt(siP2);--}}
{{--            var noP2 = document.getElementById("no2").value;--}}
{{--            let no2 =  parseInt(noP2);--}}
{{--            var alP2 = document.getElementById("al2").value;--}}
{{--            let al2 =  parseInt(alP2);--}}
{{--            var deP2 = document.getElementById("de2").value;--}}
{{--            let de2 =  parseInt(deP2);--}}

{{--            var siP3 = document.getElementById("si3").value;--}}
{{--            let si3 =  parseInt(siP3);--}}
{{--            var noP3 = document.getElementById("no3").value;--}}
{{--            let no3 =  parseInt(noP3);--}}
{{--            var alP3 = document.getElementById("al3").value;--}}
{{--            let al3 =  parseInt(alP3);--}}
{{--            var deP3 = document.getElementById("de3").value;--}}
{{--            let de3 =  parseInt(deP3);--}}

{{--            var siP4 = document.getElementById("si4").value;--}}
{{--            let si4 =  parseInt(siP4);--}}
{{--            var noP4 = document.getElementById("no4").value;--}}
{{--            let no4 =  parseInt(noP4);--}}
{{--            var alP4 = document.getElementById("al4").value;--}}
{{--            let al4 =  parseInt(alP4);--}}
{{--            var deP4 = document.getElementById("de4").value;--}}
{{--            let de4 =  parseInt(deP4);--}}

{{--            var siP5 = document.getElementById("si5").value;--}}
{{--            let si5 =  parseInt(siP5);--}}
{{--            var noP5 = document.getElementById("no5").value;--}}
{{--            let no5 =  parseInt(noP5);--}}
{{--            var alP5 = document.getElementById("al5").value;--}}
{{--            let al5 =  parseInt(alP5);--}}
{{--            var deP5 = document.getElementById("de5").value;--}}
{{--            let de5 =  parseInt(deP5);--}}

{{--            var siP6 = document.getElementById("si6").value;--}}
{{--            let si6 =  parseInt(siP6);--}}
{{--            var noP6 = document.getElementById("no6").value;--}}
{{--            let no6 =  parseInt(noP6);--}}
{{--            var alP6 = document.getElementById("al6").value;--}}
{{--            let al6 =  parseInt(alP6);--}}
{{--            var deP6 = document.getElementById("de6").value;--}}
{{--            let de6 =  parseInt(deP6);--}}

{{--            var siP7 = document.getElementById("si7").value;--}}
{{--            let si7 =  parseInt(siP7);--}}
{{--            var noP7 = document.getElementById("no7").value;--}}
{{--            let no7 =  parseInt(noP7);--}}
{{--            var alP7 = document.getElementById("al7").value;--}}
{{--            let al7 =  parseInt(alP7);--}}
{{--            var deP7 = document.getElementById("de7").value;--}}
{{--            let de7 =  parseInt(deP7);--}}

{{--            var siP8 = document.getElementById("si8").value;--}}
{{--            let si8 =  parseInt(siP8);--}}
{{--            var noP8 = document.getElementById("no8").value;--}}
{{--            let no8 =  parseInt(noP8);--}}
{{--            var alP8 = document.getElementById("al8").value;--}}
{{--            let al8 =  parseInt(alP8);--}}
{{--            var deP8 = document.getElementById("de8").value;--}}
{{--            let de8 =  parseInt(deP8);--}}

{{--            var siP9 = document.getElementById("si9").value;--}}
{{--            let si9 =  parseInt(siP9);--}}
{{--            var noP9 = document.getElementById("no9").value;--}}
{{--            let no9 =  parseInt(noP9);--}}
{{--            var alP9 = document.getElementById("al9").value;--}}
{{--            let al9 =  parseInt(alP9);--}}
{{--            var deP9 = document.getElementById("de9").value;--}}
{{--            let de9 =  parseInt(deP9);--}}

{{--            var titulo = document.getElementById("tit").value;--}}


{{--            var chart = Highcharts.chart('container', {--}}
{{--                chart: {--}}
{{--                    type: 'column'--}}
{{--                },--}}
{{--                title: {--}}
{{--                    text: titulo--}}
{{--                },--}}
{{--                xAxis: {--}}
{{--                    categories: [--}}
{{--                        '¿En su unidad administrativa existe un ambiente de trabajo cordial?',--}}
{{--                        '¿Su jefa(e) inmediato fomenta la igualdad y no discriminación entre mujeres y hombres?',--}}
{{--                        '¿El trato entre mujeres y hombres es respetuoso, sin importar el nivel jerárquico o sexo?\t',--}}
{{--                        '¿Ha sido discriminada(o) por su apariencia física, sexo, edad, discapacidad, condición de salud, estado civil, embarazo o preferencia sexual?',--}}
{{--                        '¿Existen actos, hechos o expresiones que refuercen actitudes de desigualdad entre mujeres y hombres?',--}}
{{--                        '¿Se respeta y promueve la opinión por igual de mujeres y hombres sin distinción en su ámbito de trabajo?',--}}
{{--                        '¿Se respeta y promueve la opinión por igual de mujeres y hombres sin distinción en su ámbito de trabajo?',--}}
{{--                        '¿Ha sentido intimidación o maltrato por causa de su sexo?',--}}
{{--                        '¿Se respeta por igual la autoridad de mujeres y hombres?'--}}
{{--                    ],--}}
{{--                    crosshair: true--}}
{{--                },--}}
{{--                yAxis: {--}}
{{--                    min: 0,--}}
{{--                    title: {--}}
{{--                        text: 'Rainfall (mm)'--}}
{{--                    }--}}
{{--                },--}}
{{--                tooltip: {--}}
{{--                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',--}}
{{--                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +--}}
{{--                        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',--}}
{{--                    footerFormat: '</table>',--}}
{{--                    shared: true,--}}
{{--                    useHTML: true--}}
{{--                },--}}
{{--                plotOptions: {--}}
{{--                    column: {--}}
{{--                        pointPadding: 0.2,--}}
{{--                        borderWidth: 0--}}
{{--                    }--}}
{{--                },--}}
{{--                series: [{--}}
{{--                    name: 'SÍ',--}}
{{--                    data: [si1, si2,si3, si4, si5, si6, si7, si8, si9]--}}

{{--                }, {--}}
{{--                    name: 'NO',--}}
{{--                    data: [no1, no2, no3, no4, no5, no6, no7, no8, no9]--}}

{{--                }, {--}}
{{--                    name: 'ALGUNAS VECES',--}}
{{--                    data: [al1, al2, al3, al4, al5, al6, al7, al8,al9]--}}

{{--                }, {--}}
{{--                    name: 'DESCONOZCO',--}}
{{--                    data: [de1, de2, de3, de4, de5, de6, de7, de8, de9]--}}

{{--                }]--}}
{{--            });--}}
{{--        })--}}
{{--    </script>--}}
{{--@endpush--}}

{{--@push('scripts')--}}

{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            var siP = document.getElementById("si1").value;--}}
{{--            let si1 =  parseInt(siP);--}}
{{--            var noP = document.getElementById("no1").value;--}}
{{--            let no1 =  parseInt(noP);--}}
{{--            var alP = document.getElementById("al1").value;--}}
{{--            let al1 =  parseInt(alP);--}}
{{--            var deP = document.getElementById("de1").value;--}}
{{--            let de1 =  parseInt(deP);--}}

{{--            var siP2 = document.getElementById("si2").value;--}}
{{--            let si2 =  parseInt(siP2);--}}
{{--            var noP2 = document.getElementById("no2").value;--}}
{{--            let no2 =  parseInt(noP2);--}}
{{--            var alP2 = document.getElementById("al2").value;--}}
{{--            let al2 =  parseInt(alP2);--}}
{{--            var deP2 = document.getElementById("de2").value;--}}
{{--            let de2 =  parseInt(deP2);--}}

{{--            var siP3 = document.getElementById("si3").value;--}}
{{--            let si3 =  parseInt(siP3);--}}
{{--            var noP3 = document.getElementById("no3").value;--}}
{{--            let no3 =  parseInt(noP3);--}}
{{--            var alP3 = document.getElementById("al3").value;--}}
{{--            let al3 =  parseInt(alP3);--}}
{{--            var deP3 = document.getElementById("de3").value;--}}
{{--            let de3 =  parseInt(deP3);--}}

{{--            var siP4 = document.getElementById("si4").value;--}}
{{--            let si4 =  parseInt(siP4);--}}
{{--            var noP4 = document.getElementById("no4").value;--}}
{{--            let no4 =  parseInt(noP4);--}}
{{--            var alP4 = document.getElementById("al4").value;--}}
{{--            let al4 =  parseInt(alP4);--}}
{{--            var deP4 = document.getElementById("de4").value;--}}
{{--            let de4 =  parseInt(deP4);--}}

{{--            var siP5 = document.getElementById("si5").value;--}}
{{--            let si5 =  parseInt(siP5);--}}
{{--            var noP5 = document.getElementById("no5").value;--}}
{{--            let no5 =  parseInt(noP5);--}}
{{--            var alP5 = document.getElementById("al5").value;--}}
{{--            let al5 =  parseInt(alP5);--}}
{{--            var deP5 = document.getElementById("de5").value;--}}
{{--            let de5 =  parseInt(deP5);--}}

{{--            var siP6 = document.getElementById("si6").value;--}}
{{--            let si6 =  parseInt(siP6);--}}
{{--            var noP6 = document.getElementById("no6").value;--}}
{{--            let no6 =  parseInt(noP6);--}}
{{--            var alP6 = document.getElementById("al6").value;--}}
{{--            let al6 =  parseInt(alP6);--}}
{{--            var deP6 = document.getElementById("de6").value;--}}
{{--            let de6 =  parseInt(deP6);--}}

{{--            var siP7 = document.getElementById("si7").value;--}}
{{--            let si7 =  parseInt(siP7);--}}
{{--            var noP7 = document.getElementById("no7").value;--}}
{{--            let no7 =  parseInt(noP7);--}}
{{--            var alP7 = document.getElementById("al7").value;--}}
{{--            let al7 =  parseInt(alP7);--}}
{{--            var deP7 = document.getElementById("de7").value;--}}
{{--            let de7 =  parseInt(deP7);--}}

{{--            var siP8 = document.getElementById("si8").value;--}}
{{--            let si8 =  parseInt(siP8);--}}
{{--            var noP8 = document.getElementById("no8").value;--}}
{{--            let no8 =  parseInt(noP8);--}}
{{--            var alP8 = document.getElementById("al8").value;--}}
{{--            let al8 =  parseInt(alP8);--}}
{{--            var deP8 = document.getElementById("de8").value;--}}
{{--            let de8 =  parseInt(deP8);--}}

{{--            var siP9 = document.getElementById("si9").value;--}}
{{--            let si9 =  parseInt(siP9);--}}
{{--            var noP9 = document.getElementById("no9").value;--}}
{{--            let no9 =  parseInt(noP9);--}}
{{--            var alP9 = document.getElementById("al9").value;--}}
{{--            let al9 =  parseInt(alP9);--}}
{{--            var deP9 = document.getElementById("de9").value;--}}
{{--            let de9 =  parseInt(deP9);--}}

{{--            var titulo = document.getElementById("tit").value;--}}


{{--            var chart = Highcharts.chart('container', {--}}
{{--                chart: {--}}
{{--                    type: 'column'--}}
{{--                },--}}
{{--                title: {--}}
{{--                    text: titulo--}}
{{--                },--}}
{{--                xAxis: {--}}
{{--                    categories: [--}}
{{--                        '¿En su unidad administrativa existe un ambiente de trabajo cordial?',--}}
{{--                        '¿Su jefa(e) inmediato fomenta la igualdad y no discriminación entre mujeres y hombres?',--}}
{{--                        '¿El trato entre mujeres y hombres es respetuoso, sin importar el nivel jerárquico o sexo?\t',--}}
{{--                        '¿Ha sido discriminada(o) por su apariencia física, sexo, edad, discapacidad, condición de salud, estado civil, embarazo o preferencia sexual?',--}}
{{--                        '¿Existen actos, hechos o expresiones que refuercen actitudes de desigualdad entre mujeres y hombres?',--}}
{{--                        '¿Se respeta y promueve la opinión por igual de mujeres y hombres sin distinción en su ámbito de trabajo?',--}}
{{--                        '¿Se respeta y promueve la opinión por igual de mujeres y hombres sin distinción en su ámbito de trabajo?',--}}
{{--                        '¿Ha sentido intimidación o maltrato por causa de su sexo?',--}}
{{--                        '¿Se respeta por igual la autoridad de mujeres y hombres?'--}}
{{--                    ],--}}
{{--                    crosshair: true--}}
{{--                },--}}
{{--                yAxis: {--}}
{{--                    min: 0,--}}
{{--                    title: {--}}
{{--                        text: 'Rainfall (mm)'--}}
{{--                    }--}}
{{--                },--}}
{{--                tooltip: {--}}
{{--                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',--}}
{{--                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +--}}
{{--                        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',--}}
{{--                    footerFormat: '</table>',--}}
{{--                    shared: true,--}}
{{--                    useHTML: true--}}
{{--                },--}}
{{--                plotOptions: {--}}
{{--                    column: {--}}
{{--                        pointPadding: 0.2,--}}
{{--                        borderWidth: 0--}}
{{--                    }--}}
{{--                },--}}
{{--                series: [{--}}
{{--                    name: 'SÍ',--}}
{{--                    data: [si1, si2,si3, si4, si5, si6, si7, si8, si9]--}}

{{--                }, {--}}
{{--                    name: 'NO',--}}
{{--                    data: [no1, no2, no3, no4, no5, no6, no7, no8, no9]--}}

{{--                }, {--}}
{{--                    name: 'ALGUNAS VECES',--}}
{{--                    data: [al1, al2, al3, al4, al5, al6, al7, al8,al9]--}}

{{--                }, {--}}
{{--                    name: 'DESCONOZCO',--}}
{{--                    data: [de1, de2, de3, de4, de5, de6, de7, de8, de9]--}}

{{--                }]--}}
{{--            });--}}
{{--        })--}}
{{--    </script>--}}
{{--@endpush--}}
