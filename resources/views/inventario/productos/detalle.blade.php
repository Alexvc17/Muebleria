@extends('layouts.app')
@section('content')


<br>



<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  
  
  <h2><em> <strong>Detalles del Producto</strong> </em></h2>
<hr>
  

  
<div class="card mb-3" style="max-width: 3000px" >
  <div class="row g-0 " style="background-color: #e3f2fd;">
    <div class="col-md-4">
      <img
        src='{{url("imagenes/productos/$producto->fotoProducto")}}'
        alt="..."
        class="img-fluid"
      />
    </div>
    <div class="col-md-8">
      <div class="card-body" >

      
        <br>
        <h5 class="card-title"><u>{{$producto->nombreProducto}}</u></h5>
        <br>
        <p class="card-text">
        <strong>Precio:</strong> ${{$producto->precioProducto}}
        </p>
        <p class="card-text">
        <strong>Codigo de Producto: </strong>{{$producto->id}}
        </p>
        
        <p class="card-text">
        <strong>Cantidad:</strong> {{$producto->cantidadProducto}}
        </p>
        <p class="card-text">
        <strong>Descripcion:</strong> {{$producto->descripcionProducto}}
        </p>
        <p class="card-text">
        <strong>Color:</strong> {{$producto->Color}}
        </p>
        <strong>Cantidad:</strong> {{$producto->cantidadProducto}}
       
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-5">

    <a class="btn btn-primary btn-sm active" style="background-color: #3b5998" role="button" aria-pressed="true" href="{{route('form_actualizarProducto', $producto->id)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> Editar</a>
    &nbsp&nbsp&nbsp&nbsp
    <a class="btn btn-warning btn-sm text-light active" style="background-color: #ffac44"  href="{{route('eliminar_producto', $producto->id)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Eliminar</a>
    &nbsp&nbsp&nbsp&nbsp
    <a class="btn btn-secondary btn-sm active" role="button" aria-pressed="true" href="{{url('/productos')}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg> Volver</a>
    
  
 
    </div>
    <div class="col-md-6">
      
    </div>
    <div class="col-md-1">
      
    </div>
  </div>
</div>

  
  </div>
  <div class="col-md-2"></div>
</div>





@stop

