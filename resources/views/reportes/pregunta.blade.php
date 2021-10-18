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
                            <h4 align="center">Reporte Dependencia</h4>
                            <center>
                                <div class="input-field col s12">
                                    <div class="form-group">
                                        {!! Form::select('dependencia', $Dependencia, null, ['class' => 'select2 browser-default', 'placeholder' => 'SELECCIONA UNA OPCIÓN ', 'required', 'id' => 'dependencia_id']) !!}
                                        <label>DEPENDENCIA</label>
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
        function searchDep(){
            var dep = $("#dependencia_id").val();
            console.log(dep);
            $.ajax({
                type: 'GET',
                url :   "{{ url('getDep') }}"+"/" + dep,
                beforeSend: function() {
                },
                success:  function (response) {
                    $("#detailDep").show();
                    $("#detailDep").html(response);
                },error(){
                    alert('error');
                }
            });
        }

    </script>
@endpush
