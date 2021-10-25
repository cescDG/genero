@extends('layout')
@section('title')
    GENERO
@endsection
@section('content')
    <div class="card-body">
        {!! Form::open(['route'=>'solicitud.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
        @include('libros.solicitud')
        {!! Form::close() !!}
    </div>
@endsection


