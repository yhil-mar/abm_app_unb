<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['usuarios']=Usuario::paginate(5);

        return view('usuarios.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $datosUsuario = request()->except('_token');
        Usuario::insert($datosUsuario);

        // return response()->json($datosUsuario);

        return redirect('users')->with('mensaje', '¡Usuario agregado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario=Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $datosUsuario = request()->except(['_token', '_method']);
        Usuario::where('id','=',$id)->update($datosUsuario);

        $usuario=Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect('users')->with('mensaje', '¡Usuario Borrado con éxito!');
    }
}
