<style>
    .imagen:hover{
        border-radius:50%;
        -webkit-border-radius:10%;
        box-shadow: 0px 0px 15px 15px #ec731e;
        -webkit-box-shadow: 0px 0px 15px 15px #ec731e;
        /*-transform: rotate(360deg);*/
        /*-webkit-transform: rotate(360deg);*/
        -webkit-transform:scale(1.3);
        transform:scale(1.3)
    }
</style>
<div class="container">
    <div class="section">
        <div class="card">
            <div class="card-content">
                <h1>Solicitud prestamo de libros</h1>
                <div class="row">
                    <div class="col s12">
                        <ul class="collapsible popout">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">help</i>
                                    <strong>Ayuda</strong><br>
                                </div>
                                <div class="collapsible-body">
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <p align="justify"> El presente diagnóstico permitirá visibilizar situaciones de asimetría individual y colectiva entre mujeres y hombres al interior del Poder Legislativo con el propósito de reducir brechas de desigualdad y discriminación en su espacio laboral, asimismo la consolidación de buenas prácticas que promuevan una cultura institucional que integre, como principio básico, la igualdad entre sexos. <br>
                                                A continuación, se presenta un listado de posibles situaciones que puede estar viviendo. Manifieste las respuestas que mejor describan lo que percibe o siente actualmente en su unidad administrativa de adscripción.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m12" >
                        <div class="input-field col m12">
                            <center><img class="imagen" src="{{ asset('genero/images/libros/'.$libro->id.'.png')}}" width="30%" height="30%" style="border-radius: 20px;"  alt="name" class="circle" title="Titulo: {{$libro->nombre}} / Autor: {{$libro->autor}}"></center>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col m12">
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Libro solicidado: </strong></label>
                                    {!! Form::text('libro[libro]', $libro->nombre, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                    {!! Form::hidden('libro[libro_id]', $libro->id, ['class' => 'form-control text-uppercase','id' => 'libro_id', 'name' => 'libro_id', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de recolección del libro: </strong></label>
                                    {!! Form::date('libro[fecha_recoleccion]',null, ['class' => 'form-control text-uppercase','id' => 'fecha_recoleccion', 'name' => 'fecha_recoleccion', 'required' =>true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Hora de recolección del libro: </strong></label>
                                    {!! Form::time('libro[hora_recoleccion]',null, ['class' => 'form-control text-uppercase','id' => 'hora_recoleccion', 'name' => 'hora_recoleccion', 'required' =>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6" >
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de entrega del libro: </strong></label>
                                    {!! Form::date('libro[fecha_entrega_usuario]', null, ['class' => 'form-control text-uppercase','id' => 'fecha_entrega_usuario', 'name' => 'fecha_entrega_usuario', 'required' =>true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m12">
                                <center>
                                    <button class="waves-effect waves-dark btn btn-primary" type="submit" id="b1" style="background-color: #ec731e; border-radius: 10px;">
                                        Guardar
                                    </button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
