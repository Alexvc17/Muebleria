@extends('layouts.app')
@section('content')

<br>
<br>
<br>

<br>




<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">

  <h2><em><strong>Actualizacion de Cliente</strong></em></h2>
  <hr>
<br>
  <form action="{{route('actualizar_cliente', $cliente->id)}}" method="POST">
@csrf
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="nombrePro">Nombre</label>
        <input type="text" id="nombreCli" name="nombreCli" value="{{$cliente->nombreCliente}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
    </div>

     <!-- Etiquetas de tipo number -->
    <div class="form-group">
        <label for="cantidadPro">Apellido</label>
        <input type="text" id='apellidoCli' name='apellidoCli' value="{{$cliente->apellidoCliente}}" class="form-control" placeholder="Cantidad" required>
    </div>

     <!-- Etiquetas de tipo number -->
     <div class="form-group">
        <label for="precioPro">Cedula</label>
        <input type="text" id='cedulaCli' name='cedulaCli' value="{{$cliente->cedulaCliente}}"   class="form-control" placeholder="Cantidad" required>
    </div>


     <!-- Etiquetas de tipo number -->
     <div class="form-group">
        <label for="precioPro">Direccion</label>
        <input type="text" id='direccionCli' name='direccionCli' value="{{$cliente->direccionCliente}}"   class="form-control" placeholder="Cantidad" required>
    </div>


    <div class="form-group">
        <label for="nombrePro">Telefono</label>
        <input type="text" id="telefonoCli" name="telefonoCli" value="{{$cliente->telefonoCliente}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
    </div>

    <div class="form-group">
        <label for="nombrePro">Email</label>
        <input type="text" id="emailCli" name="emailCli" value="{{$cliente->emailCliente}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
    </div>

    <br> <br>
     <!-- Etiquetas de tipo button -->
    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
    <button type="reset" class="btn btn-secondary btn-sm">Limpiar</button>
    <a type="button" href="{{url('/clientes/visualizar')}}" class="btn btn-danger btn-sm">Cancelar</a>
</form>


  </div>
  <div class="col-md-2"></div>
</div>

@stop