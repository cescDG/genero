@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')

    <div class="card-body">
        {!! Form::open(['route'=>'encuesta.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
        @include('Encuesta.form')
        {!! Form::close() !!}
    </div>
@endsection


