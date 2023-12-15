@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')

@if (Session::has('mensaje'))
    {{Session::get('mensaje')}}
    {{-- <script language="javascript">alert({{'mensaje'}});</script> --}}
@endif

<h1>Lista de Usuarios</h1>

    <a href="{{url('users/create')}}">
        Agregar nuevo usuario
    </a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Nro de teléfono</th>
            </tr>

        </thead>

        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->Nombre}}</td>
                <td>{{$usuario->Apellido}}</td>
                <td>{{$usuario->Email}}</td>
                <td>{{$usuario->Nro_de_telefono}}</td>
                <td>
                    <a href="{{url('/users/'.$usuario->id.'/edit')}}">
                        Editar
                    </a>

                    <form action="{{ url('/users/'.$usuario->id)}}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Deseas borrar este usuario?')" value="Borrar">

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection