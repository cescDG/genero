<div class="container">
    <div class="section">
        <div class="card">
            <div class="card-content">


                <div class="row">
                    <div class="input-field col m4">

                        <br>
                        <br>
                        <br>
                        <img class="materialboxed"
                             src="{{ asset('genero/images/libros/' . $libro->id . '.png') }}"
                             style="width: 100%; " alt="name" class="circle"
                             title="Titulo: {{ $libro->nombre }} / Autor: {{ $libro->autor }}">
                        <br>


                    </div>

                    <div class="input-field col m8">

                        <div class="row">
                            <h1>Formato de préstamo de libro(s)</h1>

                            La Persona servidora pública solicitante deberá:
                            <ol>
                                <li>Acudir personalmente a la Unidad de Igualdad de Género y Erradicación de la
                                    Violencia, a efecto de concluir el trámite de préstamo y entrega del libro.
                                </li>
                                <li>Informar a la Unidad de Igualdad de Género y Erradicación de la Violencia, cualquier
                                    desperfecto o incidente con el libro.
                                </li>
                                <li>No maltratar, doblar, subrayar, manchar, arrancar hojas o imágenes del libro.</li>
                                <li>Contemplar que el período de préstamo es por 30 días, en su caso, podrá realizar la
                                    renovación del período en caso de disponibilidad.
                                </li>

                            </ol>


                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Libro solicidado: </strong></label>
                                    {!! Form::text('libro[libro]', $libro->nombre, ['class' => 'form-control text-uppercase','id' => 'libro', 'name' => 'libro', 'readonly'=>true]) !!}
                                    {!! Form::hidden('libro[libro_id]', $libro->id, ['class' => 'form-control text-uppercase','id' => 'libro_id', 'name' => 'libro_id', 'readonly'=>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de recolección del
                                            libro: </strong></label>
                                    {!! Form::date('libro[fecha_recoleccion]',null, ['class' => 'form-control text-uppercase','id' => 'fecha_recoleccion', 'name' => 'fecha_recoleccion', 'required' =>true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Hora de recolección del
                                            libro: </strong></label>
                                    {!! Form::time('libro[hora_recoleccion]',null, ['class' => 'form-control text-uppercase','id' => 'hora_recoleccion', 'name' => 'hora_recoleccion', 'required' =>true]) !!}
                                </div>
                            </div>
                            <div class="input-field col m6">
                                <div class="form-group">
                                    <label class="control-label"><strong>Fecha de entrega del libro: </strong></label>
                                    {!! Form::date('libro[fecha_entrega_usuario]', null, ['class' => 'form-control text-uppercase','id' => 'fecha_entrega_usuario', 'name' => 'fecha_entrega_usuario', 'required' =>true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m12">
                                <center>
                                    <button class="waves-effect waves-dark btn btn-primary" type="submit" id="b1"
                                            style="background-color: #ec731e; border-radius: 10px;">
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



