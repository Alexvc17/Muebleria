@extends('layouts.app')
@section('content')


<h1></h1>





@if($tot == 0)

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-4">
      
    </div>
    <div class="col-4">

    <div class="card text-center">
  <div class="card-header"><h5><em> <strong>No tiene ninguna deuda</strong> </em></h5></div>
  <div class="card-body">
    
    <p class="card-text">
Felicitaciones!! Mueblesorts lo certifica con un paz y salvo
   
    </p>
    
  </div>
  
</div>
      
    </div>
    <div class="col-4">
      
    </div>
  </div>
</div>



@else

@if($tot > 0)


<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-4">
      
    </div>
    <div class="col-4">

    <div class="card text-center">
  <div class="card-header"><h5><em> <strong>El usuario tiene deuda</strong> </em></h5></div>
  <div class="card-body">
    
    <p class="card-text">
    No puede obtener paz y salvo porque debe {{$tot}}
   
    </p>
    
  </div>
  
</div>
      
    </div>
    <div class="col-4">
      
    </div>
  </div>
</div>
@else
@endif
@endif

    


@stop