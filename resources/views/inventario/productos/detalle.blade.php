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

        <h5 class="card-title"><u>{{$producto->nombreProducto}}</u></h5>
        <br>
        <p class="card-text">
        <strong>Precio:</strong> ${{$producto->precioProducto}}
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
        
      </div>
    </div>
  </div>
</div>


  
  </div>
  <div class="col-md-2"></div>
</div>





@stop

