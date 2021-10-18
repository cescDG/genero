<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="content-type" content="text-html; charset=utf-8">
    <style type="text/css">
        p.titulos {
            font-size: 15px;

            text-align: center;
            margin-top: 20px;
        }

        p.subtitulo {
            font-size: 13px;

            text-align: center;
        }

        p.folio {
            font-size: 13px;

            text-align: right;
        }

        p.destinatario {
            font-size: 13px;

            text-align: left;
            margin-top: 20pt;
        }

        .center {
            text-align: center;
        }

        p.texto {
            font-size: 11px;

            text-align: justify;
        }

        td {
            margin-top: 50px;

            font-size: 11px;

            /* border: 1px solid #000000; */
        }

        .text-center {
            text-align: center;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .danger {
            color: red;
        }

        .warning {
            color: yellow;
        }

        .success {
            color: green;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 11px;
        }

        .th-h {
            text-align: center !important;
            font-size: 11px;
        }

        th {
            border: 1px solid #000000;
            text-align: center !important;
            padding: 8px;
            font-size: 10px;

        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        @page {
            margin: 0cm 0cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 0cm;
        }

        .center-img {
            text-align: center;
        }

        .header-img {
            width: 30%;
        }

        .footer-img {
            width: 80%;
        }

        body {
            margin: 80px 80px 75px 80px;
        }

        .firma {
            background-color: transparent !important;
            text-align: center;
            font-size: 10px;
        }

        .tabla2 {
            border: 1px solid #000000;
            font-size: 10px;
        }

        .tablita2 {
            font-size: 12px;
            justify;
            style="line-height:.5px;
padding-left: 20px;
        }

        @font-face {
            font-family: 'Helvetica';
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
        }

        body {
            margin-top: 3.5cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
            font-size: 14px;
            font-family: 'Helvetica';
            font-style: normal;
            font-size: 7.7px;
        }

        h1 {
            font-size: 12px;
            font-weight: bold;
        }

        th {
            font-weight: bold;
            background-color: #d2d3d5;
        }

        h5 {
            font-size: 11px;
            font-weight: bold;
            text-align: justify;
        }

        .texta {
            font-weight: bold;
            text-align: justify;
            color: #960048;
            font-size: 8px;
        }


        span {
            font-size: 10px;
            font-weight: bold;
            text-align: justify;
            content: '\A' !important;
            white-space: pre !important;
        }


        header {
            position: fixed;
            top: .5cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }

        /* Define the footer rules */
        footer {
            position: fixed;
            bottom: 0cm;
            left: .5cm;
            right: 0cm;
            height: 2cm;
        }

        h1 {
            font-size: 12px;
            font-weight: bold;
        }

        th {
            font-weight: bold;
            background-color: #d2d3d5;
        }

        h5 {
            font-size: 11px;
            font-weight: bold;
            text-align: justify;
        }


        .texta {
            font-weight: bold;
            text-align: justify;
            color: #960048;
            font-size: 8px;
        }


        span {
            font-size: 10px;
            font-weight: bold;
            text-align: justify;
            content: '\A' !important;
            white-space: pre !important;
        }

        p {}

        .page_break {
            page-break-before: always;
        }

    </style>
</head>

<body>
    <header>
        <br>
        <center>
            <div class="row">
                <img src="{{ asset('genero/images/logo/logoSec.png') }}" alt=" avatar" style="width: 80%;" />
            </div>
            <br><br>
        </center>
    </header>
    <main>
        <br>
        <br><br>
        <table width="100%" border="0" cellpadding="4">
            <tbody>
                <tr>
                    <td align="center" style="font-size: 13px;" bgcolor="#DCD6D4"><strong>   {{ mb_strtoupper($ubicacion->Nombre) }}</strong></td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        @foreach ($preguntas as $pregunta)

        <table  width="100%" style="border:1px solid;">

            <thead>
                <tr>
                    <th style="width: 50%;">{{ $pregunta->texto }}</th>
                    <th>Sí</th>
                    <th>No</th>
                    <th>Algunas veces</th>
                    <th>Desconozo</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td align="center" width="10%">Total</td>

                        <td align="center" width="10%"  style="color:rgb(150,0,72);">
                            @foreach($sumaA as $key => $value)
                                @if($key == $pregunta->id)
                                    {{$value}}
                                @endif
                            @endforeach
                        </td>



                        <td align="center" width="10%"  style="color:rgb(150,0,72);">
                            @foreach($sumaB as $key => $value)
                                @if($key == $pregunta->id)
                                {{$value}}
                                @endif
                            @endforeach
                        </td>
                        <td align="center" width="10%"  style="color:rgb(150,0,72);">
                            @foreach($sumaC as $key => $value)
                                @if($key == $pregunta->id)
                                {{$value}}
                                @endif
                            @endforeach
                        </td>
                        <td align="center" width="10%"  style="color:rgb(150,0,72);">

                            @foreach($sumaD as $key => $value)
                                @if($key == $pregunta->id)
                                        {{$value}}
                                @endif
                            @endforeach
                        </td>

                </tr>

            </tbody>
        </table>
            <br>

     @endforeach
    </main>
</body>

</html>
