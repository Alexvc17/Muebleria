@extends('layouts.app')
@section('content')

<br>
<br>
<!--INGRESAR MONTO A CANCELAR-->

<div class="container">
  <div class="row">
    <div class="col-3">
      
    </div>
    <div class="col-6">
    <form action="{{route('actualiza_pago')}}" method="POST">
@csrf
  <div class="input-group">
  <input type="number" class="form-control rounded" min="1" placeholder="Ingrese monto a cancelar" id="monto" name="monto" aria-label="Search"
    aria-describedby="search-addon" required>
  <button type="submit" class="btn btn-secondary">Ingresar</button>
</div>
</form>
    </div>
    <div class="col-3">
      
    </div>
  </div>
</div>



@stop