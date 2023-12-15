@extends('layouts.template')

@section('title', 'Create User')

@section('content')
    <h2>Crear Usuario</h2>
    <form action="{{url('/users')}}" method="POST">
    @csrf
    @include('usuarios.form', ['tipo'=>'Crear'])
    </form>
@endsection