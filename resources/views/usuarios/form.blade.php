
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($usuario->Nombre)?$usuario->Nombre:''}}"> <br/>

<label for="Apellido">Apellido</label>
<input type="text" name="Apellido" value="{{isset($usuario->Apellido)?$usuario->Apellido:''}}"> <br/>

<label for="Email">Email</label>
<input type="text" name="Email" value="{{isset($usuario->Email)?$usuario->Email:''}}"> <br/>

<label for="Nro de telefono">Número de teléfono</label>
<input type="number" name="Nro de telefono" value="{{isset($usuario->Nro_de_telefono)?$usuario->Nro_de_telefono:''}}"> <br/>

<label for="Contrasena">Contraseña</label>
<input type="password" name="Contrasena" value="{{isset($usuario->Contasena)?$usuario->Contasena:''}}"> <br/>

<input type="submit" value="{{$tipo}} usuario"> <br/>

<a href="{{url('users')}}">Regresar</a>
