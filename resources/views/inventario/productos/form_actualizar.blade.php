@extends('layouts.app')
@section('content')

<br>
<br>
<br>

<br>




<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">

  <h2><em><strong>Actualizacion de Producto</strong></em></h2>
  <hr>
<br>
  <form action="{{route('actualizar_producto', $producto->id)}}" method="POST">
@csrf
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="nombrePro">Nombre </label>
        <input type="text" id="nombrePro" name="nombrePro" value="{{$producto->nombreProducto}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
    </div>

     <!-- Etiquetas de tipo number -->
    <div class="form-group">
        <label for="cantidadPro">Cantidad </label>
        <input type="number" id='cantidadPro' name='cantidadPro' value="{{$producto->cantidadProducto}}" min='1' max='1000' class="form-control" placeholder="Cantidad" required>
    </div>

     <!-- Etiquetas de tipo number -->
     <div class="form-group">
        <label for="precioPro">Precio </label>
        <input type="number" id='precioPro' name='precioPro' value="{{$producto->precioProducto}}"  min='100000'  class="form-control" placeholder="Cantidad" required>
    </div>


     <!-- Etiquetas de tipo file -->
     <div class="form-group">
        <label for="fotoPro">Sube la foto: {{$producto->fotoProducto}}"</label> 
        <input type="file" name="fotoPro" id="fotoPro" class="form-control-file" value="{{$producto->fotoProducto}}"  required>
    </div>


    <div class="form-group">
        <label for="descPro">Descripcion </label>
        <input type="text" style="width : 1000px; heigth : 400px"  id='descPro' name='descPro' value="{{$producto->descripcionProducto}}" class="form-control" placeholder="Descripcion Producto" required>
    </div>

    <div class="form-group">
        <label for="colorPro">Color </label>
        <input type="text" id='colorPro' name='colorPro' value="{{$producto->Color}}"  class="form-control" placeholder="Color"  required>
  
<br>
     <!-- Etiquetas de tipo Select -->
    <label for="productos">Categorias</label> 
    <select class="custom-select" id="productos" name="categoriaPro">
        @foreach($categorias as $c)
        <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
        @endforeach
    </select>
    <br> <br>
     <!-- Etiquetas de tipo button -->
    <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
    <button type="reset" class="btn btn-secondary btn-sm">Limpiar</button>
    <a type="button" href="{{url('/productos')}}" class="btn btn-danger btn-sm">Cancelar</a>
</form>


  </div>
  <div class="col-md-2"></div>
</div>

@stop