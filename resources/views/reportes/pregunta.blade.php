@extends('layout')
@section('title')
    REPORTE POR PREGUNTA
@endsection
@section('content')
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
                        <h4 align="center">Preguntas</h4>
                        @foreach ( $preguntas as $pregunta)


                        <table class="striped" style="border:1px solid;">

                            <thead>
                              <tr>
                                  <th>{{ $pregunta->texto }}</th>
                                  <th>Sí</th>
                                  <th>No</th>
                                  <th>Algunas veces</th>
                                  <th>Desconozo</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>Legislatura</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                              </tr>
                              <tr>
                                <td>Secretaría De Asuntos Parlamentarios  </td>
                                <td>Jellybean</td>
                                <td>$3.76</td>
                              </tr>
                              <tr>
                                <td>Órgano Superior De Fiscalización</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                              </tr>
                              <tr>
                                <td>Secretarría De Administración y Finanzas</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                              </tr>

                              <tr>
                                <td>Dirección General De Comunicación Social </td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                              </tr>

                              <tr>
                                <td>Contraloría</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                              </tr>

                              <tr>
                                <td>Instituto De Estudios Legislativos</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                              </tr>
                            </tbody>
                          </table>
                          <br>

                          @endforeach
                          <div class="d-flex justify-content-center">
                            {{ $preguntas->links('vendor.pagination') }}
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <br>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
