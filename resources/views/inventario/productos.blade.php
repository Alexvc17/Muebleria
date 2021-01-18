@extends('layouts.app')
@section('content')



<!--Aqui se recibe los datos  que desde el CONTROLADOR fueron enviados y se los imprime-->



<br>



<div class="container">
<h2><em> <strong>Productos disponibles</strong> </em></h2>
  <hr>
  <div class="row">
  @foreach($productos as $p)
    <div class="col-md-3">
    
                <div class="card" style="width: 15rem;">
                
                     <a href="{{route('detalleProducto', $p->id)}}"><img src='{{url("imagenes/productos/$p->fotoProducto")}}' class="card-img-top" alt="..."></a>
                    <div class="card-body">
<!--Aqui solamente se visualiza lo que se mando desde el controlador productos-->
                        <h5 class="card-title">{{$p->nombreProducto}}</h5>
                        
                        <p class="card-text">Precio: ${{$p->precioProducto}}</p>
                        

                    </div>
                    
                    <!--Le envio como parametros el id  para que se visualize solamente la informacion de 
                    ese producto -->
                </div>

    
                
    </div>
    @endforeach
  </div>
</div>


@stop

