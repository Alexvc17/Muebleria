@extends('layouts.app')
@section('content')



<!--Aqui se recibe los datos  que desde el CONTROLADOR fueron enviados y se los imprime-->

 


<br>



<div class="container">
<div class="row">
  <div class="col-md-6"><h2><em> <strong>Productos Disponibles <a href="{{route('registroPro')}}" class="btn btn-success btn-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Nuevo</a></strong> </em></h2>
  <hr>
  
  </div>

  <div class="col-md-3"></div>
  <div class="col-md-3">
  <form action="{{route('consulta_productos')}}" method="POST">
@csrf
  <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Buscar" id="nombrePro" name="nombrePro" aria-label="Search"
    aria-describedby="search-addon" required>
  <button type="submit" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg></button>
</div>
</form>

  </div>
</div>

  <div class="row">
  @foreach($productos as $p)
    <div class="col-md-3">
    
                <div class="card" style="width: 15rem;">
                
                     <a href="{{route('detalleProducto', $p->id)}}"><img src='{{url("imagenes/productos/$p->fotoProducto")}}' class="card-img-top" alt="..."></a>
                    <div class="card-body">
<!--Aqui solamente se visualiza lo que se mando desde el controlador productos-->
                        
                        <h5 class="card-title">{{$p->nombreProducto}}</h5>
                        <p class="card-text">Categoria: {{$p->nombreCategoria}}</p>
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

