    <div class="container">
        <div class="section">
            <div class="card">
                <div class="section section-data-tables">
                    <div class="row">
                        <div class="col s12">
                            @if(count($reporte))
                            <h4 class="text-align center">Reporte individual</h4>
                                <table id="striped" class="display">
                                    <thead>
                                    <tr>
                                        <th>Pregunta</th>
                                        <th>Respuesta</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ( $reporte as $report)
                                        <tr>
                                            <th align="justify">{{$report->preguntas->texto}}</th>
                                            <th align="justify">
                                                @if($report->respuesta == 'A')
                                                    Sí
                                                @elseif($report->respuesta == 'B')
                                                    No
                                                @elseif($report->respuesta == 'C')
                                                    Algunas veces
                                                @elseif($report->respuesta == 'D')
                                                    Desconozo
                                                @endif
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                <h4 class="text-align center">NO HAY REGISTRO AUN</h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
