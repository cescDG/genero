
        <h4>{{$ubicacion->Nombre}}</h4>
        @php $i = 1; @endphp
        <table>
            <thead>
            <tr>
                <th><strong><h4>Ambiente de trabajo y discriminación</h4></strong></th>
                <th>Sí</th>
                <th>No</th>
                <th>Algunas veces</th>
                <th>Desconozco</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($preguntas as $pregunta)
                            <tr>
                                <td>{{ $pregunta->texto }}</td>
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
                    @if ($i ==9) @break  @endif
                    @php $i ++ @endphp
                @endforeach
            </tbody>
        </table>

        <table>
            <thead>
            <tr>
                <th><strong><h4>Condiciones de trabajo</h4></strong></th>
                <th>Sí</th>
                <th>No</th>
                <th>Algunas veces</th>
                <th>Desconozco</th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
                @foreach ($preguntas as $preg  )
                    @if ($i >= 10 )
                            <tr>
                                <td>{{ $preg->texto }}</td>
                                <td>
                                    @foreach ($sumaA as $key => $value)
                                        @if ($key == $preg->id)
                                            {{ $value }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($sumaB as $key => $value)
                                        @if ($key == $preg->id)
                                            {{ $value }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($sumaC as $key => $value)
                                        @if ($key == $preg->id)
                                            {{ $value }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>

                                    @foreach ($sumaD as $key => $value)
                                        @if ($key == $preg->id)
                                            {{ $value }}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                    @endif
                    @if ($i==15)
                        @break
                    @endif
                    @php
                        $i ++
                    @endphp
                @endforeach
            </tbody>
        </table>

        <table>
            <thead>
            <tr>
                <th><strong><h4>Permanencia y promoción</h4></strong></th>
                <th>Sí</th>
                <th>No</th>
                <th>Algunas veces</th>
                <th>Desconozco</th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach ($preguntas as $preg  )
                @if ($i >= 16)
                    <tr>
                        <td>{{ $preg->texto }}</td>
                        <td>
                            @foreach ($sumaA as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($sumaB as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($sumaC as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                        <td>

                            @foreach ($sumaD as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endif
                @if ($i==21)
                    @break
                @endif
                @php
                    $i ++
                @endphp
            @endforeach
            </tbody>
        </table>

        <table>
            <thead>
            <tr>
                <th><strong><h4>Capacitación y formación</h4></strong></th>
                <th>Sí</th>
                <th>No</th>
                <th>Algunas veces</th>
                <th>Desconozco</th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach ($preguntas as $preg  )
                @if ($i >= 22)
                    <tr>
                        <td>{{ $preg->texto }}</td>
                        <td>
                            @foreach ($sumaA as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($sumaB as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($sumaC as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                        <td>

                            @foreach ($sumaD as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endif
                @if ($i==27)
                    @break
                @endif
                @php
                    $i ++
                @endphp
            @endforeach
            </tbody>
        </table>

        <table>
            <thead>
            <tr>
                <th><strong><h4>Corresponsabilidad entre la vida laboral, familiar y personal</h4></strong></th>
                <th>Sí</th>
                <th>No</th>
                <th>Algunas veces</th>
                <th>Desconozo</th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach ($preguntas as $preg  )
                @if ($i >= 28)
                    <tr>
                        <td>{{ $preg->texto }}</td>
                        <td>
                            @foreach ($sumaA as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($sumaB as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($sumaC as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                        <td>

                            @foreach ($sumaD as $key => $value)
                                @if ($key == $preg->id)
                                    {{ $value }}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endif
                @if ($i==35)
                    @break
                @endif
                @php
                    $i ++
                @endphp
            @endforeach
            </tbody>
        </table>


