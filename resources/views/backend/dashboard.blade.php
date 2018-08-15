
@extends('backend.layout')

@section('content')

	<h2>Bienvenido Usuario: {{ Auth::user()->name }} </h2>

@endsection