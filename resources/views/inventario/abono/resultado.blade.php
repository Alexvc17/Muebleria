@extends('layouts.app')
@section('content')


<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-2">
      
    </div>
    <div class="col-5">

    <div class="card text-center">
  <div class="card-header"><h5><em> <strong>Valor de la deuda de la cedula</strong> </em></h5></div>
  <div class="card-body">
    
    <p class="card-text">
    Cedula: <strong>{{$cliente->cedulaCliente}}</strong> <br>
    Valor de deuda del cliente: @foreach($pagos as $p)
    <strong>{{ $p->total }}</strong>
    @endforeach
    </p>
    
    
  </div>
  <div class="card-footer text-muted"><a href="{{route('realizar_abono',$cliente->cedulaCliente)}}" class="btn btn-primary">Pagar Cuota</a></div>
</div>
      
    </div>
    <div class="col-5">
    <br>
<br>

    <div class="col-3">
      
    </div>
  </div>
</div>

    </div>
  </div>
</div>




@stop