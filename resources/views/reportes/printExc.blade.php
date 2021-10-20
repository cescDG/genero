
        <h4 align="center">{{$ubicacion->Nombre}}</h4>
        @foreach ($preguntas as $pregunta)
            <table class="striped" style="border:1px solid;">

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
        @endforeach



