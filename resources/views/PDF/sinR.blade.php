<!DOCTYPE html>
<html style='background-color: #7e57c2;'>

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
        .firma {
            background-color: transparent !important;
            text-align: center;
            font-size: 10px;
        }

        .tabla2 {
            border: 1px solid #000000;
            font-size: 10px;
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

        p {
            font-size: 10px;
            text-align: right;
        }

        .page_break {
            page-break-before: always;
        }

        table{
            border-color: #848585;
        }

        th{
            border-color: #848585;
        }

    </style>
</head>
<header>
    <center>
        <div class="row">
            <img src="{{ asset('generos/images/logo/sup.png') }}" alt=" avatar" style="width: 100%;" />
        </div>
    </center>
</header>
<body>
<p style="color:rgb(150,0,72);"> Toluca, Estado de México;{{$fDia}} de {{ucfirst($fMes)}} de {{$fAnio}}</p>
<main>
    <br>
    <br>
    <div class="row">
        <table width="100%" style="border:1px solid;" cellpadding="6">
            <thead>
            <tr>
                <th style="width: 25%;">Servidor público</th>
                <th style="width: 25%;">Adscripción</th>
                <th style="width: 25%;">Dirección</th>
                <th style="width: 25%;">Departamento</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($usuarios as $us)
                <tr>
                    <td>{{$us->Nombre}}</td>
                    <td>{{$us->dependencia->Nombre}}</td>
                    <td>{{$us->direccion->Nombre}}</td>
                    <td>{{$us->departamento->Nombre}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</main>
</body>
</html>
