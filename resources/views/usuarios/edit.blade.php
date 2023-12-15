@extends('layouts.template')

@section('title', 'Edit User ')

@section('content')
<h2>Editar Usuario</h2>
<form action="{{url('/users/'.$usuario->id)}}" method="POST">
    @csrf
    {{method_field('PATCH')}}
    @include('usuarios.form', ['tipo'=>'Editar'])
    </form>
@endsection