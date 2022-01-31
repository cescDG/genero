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
                            <h4 align="center">Reporte dependencia por pregunta</h4>
                            <br>
                            <center>
                                <div class="input-field col s6">
                                    <div class="form-group">
                                        {!! Form::select('dependencia', $Dependencia, null, ['class' => 'select2 browser-default', 'placeholder' => 'SELECCIONA UNA OPCIÓN ', 'required', 'id' => 'dependencia_id']) !!}
                                        <label>DEPENDENCIA</label>
                                    </div>
                                </div>
                                <div class="input-field col s6">
                                    <div class="form-group">
                                        {!! Form::select('genero_id', $genero, null, ['class' => 'select2 browser-default', 'placeholder' => 'SELECCIONA UNA OPCIÓN ', 'required', 'id' => 'genero_id']) !!}
                                        <label>Genero</label>
                                    </div>
                                </div>
                            </center>
                            <div class="card-body">
                                <div class="container">
                                    <br>
                                    <center>
                                        <strong>
                                            <br><br>
                                            <button class="btn btn-sm btn-secondary" type="submit" name="action"
                                                style="background-color:rgb(150,0,72);" onclick="searchDep()">
                                                <i class="material-icons left">archive</i>Aceptar</button>
                                        </strong>
                                    </center>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id='detailDep' style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        function searchDep() {
            var dep = $("#dependencia_id").val();
            var genero_id = $("#genero_id").val();
            console.log(dep);
            $.ajax({
                type: 'GET',
                url: "{{ url('getDepG') }}" + "/" + dep  + genero_id,
                beforeSend: function() {},
                success: function(response) {
                    $("#detailDep").show();
                    $("#detailDep").html(response);
                },
                error() {
                    alert('error');
                }
            });
        }


        function imprimir() {
            console.log("si")
            var dep = $("#dependencia_id").val();
            $.ajax({
                url: "{{ url('imprimirG') }}" + "/" + dep,
                type: 'GET',
                data: {},
                xhrFields: {
                    responseType: 'blob'
                },
                beforeSend: function() {

                },
                success: function(response) {
                    var blob = new Blob([response]);

                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = "Reporte.xlsx";
                    link.click();


                },
                error: function(error) {
                    console.log(error);
                }
            })
        }
    </script>
@endpush
