@extends('layouts.app')
@section('content')


<br>



<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  
  
  <h2><em> <strong>Producto encontrado!</strong> </em></h2>
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




    <a class="btn btn-secondary btn-sm active" role="button" aria-pressed="true" href="{{url('/productos')}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
</svg> Volver</a>
    
  

  
  </div>
  <div class="col-md-2"></div>
</div>

@stop