<div class="container">
    <div class="section">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <h6>Instrucciones: Selecciona la opción en el círculo que corresponda al valor de su respuesta.</h6>
                </div>
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
                @endforeach



            </div>
        </div>
    </div>
</div>
