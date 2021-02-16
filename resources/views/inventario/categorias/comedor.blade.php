@extends('layouts.app')
@section('content')







<br>



<div class="container">
<h2><em> <strong>Productos Comedor</strong> </em></h2>
  <hr>
  <div class="row">
  @foreach($productos as $p)
    <div class="col-md-3">
    
                <div class="card" style="width: 15rem;">
                
                     <a href="{{route('detalleProducto', $p->id)}}"><img src='{{url("imagenes/productos/$p->fotoProducto")}}' class="card-img-top" alt="..."></a>
                    <div class="card-body">

                        <h5 class="card-title">{{$p->nombreProducto}}</h5>
                        <p class="card-text">Categoria: {{$p->nombreCategoria}}</p>
                        <p class="card-text">Precio: ${{$p->precioProducto}}</p>
                        
                        
                    </div>
                    
                   
                </div>

    
                
    </div>
    @endforeach
  </div>
</div>


@stop
