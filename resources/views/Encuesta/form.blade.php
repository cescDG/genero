
<div class="row">
    <div class="col s12">
        <div class="container">
            <div class="section">
                <div class="card">
                    <div class="card-content">
                        <h1>Diagnóstico de igualdad de trato y oportunidades entre mujeres y hombres</h1>
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
                                <span><strong>Instrucciones:</strong> Selecciona la opción en el círculo que corresponda al valor de su respuesta. </span>
                            </div>
                        </div>

                        <ul class="stepper horizontal" id="horizStepper">
                            <li class="step active">
                                <div class="step-title waves-effect">Sección 1</div>
                                     <div class="step-content">
                                         <div class="row">
                                             <div class="input-field col m6">
                                                 <center>Pregunta</center>
                                             </div>
                                             <div class="input-field col m1">
                                                 <center>Sí</center>
                                             </div>
                                             <div class="input-field col m1">
                                                 <center>No</center>
                                             </div>
                                             <div class="input-field col m2">
                                                 <center>Algunas veces</center>
                                             </div>
                                             <div class="input-field col m2">
                                                 <center>Lo desconosco</center>
                                             </div>
                                         </div>
                                         @php $i = 1; @endphp
                                         @foreach ($preguntas as $preg)
                                            <div class="container">
                                                <div class="card">
                                                    <section class="row">
                                                        <div class="input-field col m6">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio" value="A" />
                                                                    <span></span>
                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio" value="B" />
                                                                    <span></span>
                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio" value="C" />
                                                                    <span></span>
                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio" value="D" />
                                                                    <span></span>
                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            @if ($i ==5) @break  @endif
                                            @php $i ++ @endphp
                                         @endforeach
                                         <div class="row">
                                             <div class="col m10 s12">
                                             </div>
                                             <div class="col m2 s12">
                                                 <button class="waves-effect waves dark btn btn-primary next-step"
                                                         type="submit">Siguiente<i class="material-icons right">arrow_forward</i>
                                                 </button>
                                             </div>
                                         </div>
                                    </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect">Sección 2</div>
                                    <div class="step-content">
                                        <div class="row">
                                            <div class="input-field col m6">
                                                <center>Pregunta</center>
                                            </div>
                                            <div class="input-field col m1">
                                                <center>Sí</center>
                                            </div>
                                            <div class="input-field col m1">
                                                <center>No</center>
                                            </div>
                                            <div class="input-field col m2">
                                                <center>Algunas veces</center>
                                            </div>
                                            <div class="input-field col m2">
                                                <center>Lo desconosco</center>
                                            </div>
                                        </div>
                                        @php
                                            $i=1;
                                        @endphp

                                        @foreach ($preguntas as $preg  )
                                            @if ($i >= 6 )
                                                <div class="container">
                                                    <div class="card">
                                                        <section class="row">
                                                            <div class="input-field col m6">
                                                                <p>{{ $preg->texto }}</p>
                                                            </div>
                                                            <div class="input-field col m1">
                                                                <center>
                                                                    <label class="validate">
                                                                        <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                               value="A" />
                                                                        <span></span>

                                                                    </label>
                                                                </center>
                                                            </div>
                                                            <div class="input-field col m1">
                                                                <center>
                                                                    <label class="validate">
                                                                        <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                               value="B" />
                                                                        <span></span>

                                                                    </label>
                                                                </center>
                                                            </div>
                                                            <div class="input-field col m2">
                                                                <center>
                                                                    <label class="validate">
                                                                        <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                               value="C" />
                                                                        <span></span>

                                                                    </label>
                                                                </center>
                                                            </div>
                                                            <div class="input-field col m2">
                                                                <center>
                                                                    <label class="validate">
                                                                        <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                               value="D" />
                                                                        <span></span>

                                                                    </label>
                                                                </center>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($i==10)
                                                @break

                                            @endif
                                            @php
                                                $i ++
                                            @endphp
                                        @endforeach
                                        <div class="row">
                                            <div class="col m10 s12">
                                            </div>
                                            <div class="col m2 s12">
                                                <button class="waves-effect waves dark btn btn-primary next-step"
                                                        type="submit">Siguiente<i class="material-icons right">arrow_forward</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect">Sección 3</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Lo desconosco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp

                                    @foreach ($preguntas as $preg  )
                                        @if ($i >= 11 )
                                            <div class="container">
                                                <div class="card">
                                                    <section class="row">
                                                        <div class="input-field col m6">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="A" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="B" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="C" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="D" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($i==15)
                                            @break

                                        @endif
                                        @php
                                            $i ++
                                        @endphp
                                    @endforeach
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">Siguiente<i class="material-icons right">arrow_forward</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect">Sección 4</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Lo desconosco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp

                                    @foreach ($preguntas as $preg  )
                                        @if ($i >= 16 )
                                            <div class="container">
                                                <div class="card">
                                                    <section class="row">
                                                        <div class="input-field col m6">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="A" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="B" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="C" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="D" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($i==20)
                                            @break

                                        @endif
                                        @php
                                            $i ++
                                        @endphp
                                    @endforeach
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">Siguiente<i class="material-icons right">arrow_forward</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect">Sección 5</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Lo desconosco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp

                                    @foreach ($preguntas as $preg  )
                                        @if ($i >= 21 )
                                            <div class="container">
                                                <div class="card">
                                                    <section class="row">
                                                        <div class="input-field col m6">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="A" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="B" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="C" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="D" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($i==25)
                                            @break

                                        @endif
                                        @php
                                            $i ++
                                        @endphp
                                    @endforeach
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">Siguiente<i class="material-icons right">arrow_forward</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect">Sección 6</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Lo desconosco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp

                                    @foreach ($preguntas as $preg  )
                                        @if ($i >= 26 )
                                            <div class="container">
                                                <div class="card">
                                                    <section class="row">
                                                        <div class="input-field col m6">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="A" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="B" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="C" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="D" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($i==30)
                                            @break

                                        @endif
                                        @php
                                            $i ++
                                        @endphp
                                    @endforeach
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves dark btn btn-primary next-step"
                                                    type="submit">Siguiente<i class="material-icons right">arrow_forward</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step">
                                <div class="step-title waves-effect">Sección 7</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col m6">
                                            <center>Pregunta</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>Sí</center>
                                        </div>
                                        <div class="input-field col m1">
                                            <center>No</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Algunas veces</center>
                                        </div>
                                        <div class="input-field col m2">
                                            <center>Lo desconosco</center>
                                        </div>
                                    </div>
                                    @php
                                        $i=1;
                                    @endphp

                                    @foreach ($preguntas as $preg  )
                                        @if ($i >= 31 )
                                            <div class="container">
                                                <div class="card">
                                                    <section class="row">
                                                        <div class="input-field col m6">
                                                            <p>{{ $preg->texto }}</p>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="A" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m1">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="B" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="C" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="input-field col m2">
                                                            <center>
                                                                <label class="validate">
                                                                    <input class="with-gap" name="{{$preg->id}}" id="{{$preg->id}}" type="radio"
                                                                           value="D" />
                                                                    <span></span>

                                                                </label>
                                                            </center>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($i==35)
                                            @break

                                        @endif
                                        @php
                                            $i ++
                                        @endphp
                                    @endforeach
                                    <div class="row">
                                        <div class="col m10 s12">
                                        </div>
                                        <div class="col m2 s12">
                                            <button class="waves-effect waves-dark btn btn-primary" type="submit">
                                                Guardar Registro
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                    </ul>
                    </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
        var stepperDiv = document.querySelector('.stepper');
        console.log(stepperDiv);
        var stepper = new MStepper(stepperDiv);
        });
    </script>
@endpush
