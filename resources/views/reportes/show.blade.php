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
                        <h4 align="center">{{$ubicacion->nombre_completo}}</h4>
                        @foreach ($preguntas as $pregunta)
                            <table class="striped" style="border:1px solid;">

                                <thead>
                                    <tr>
                                        <th style="width: 50%;"><p style="text-align: left">{{ $pregunta->texto }}</p> </th>
                                        <th>Sí</th>
                                        <th>No</th>
                                        <th>Algunas veces</th>
                                        <th>Desconozco</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Total</td>

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

                                </tbody>
                            </table>
                            <br>

                        @endforeach
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
