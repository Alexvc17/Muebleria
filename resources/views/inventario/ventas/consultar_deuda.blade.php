@extends('layouts.app')
@section('content')

<br>
<div class="container">
  <div class="row">
    <div class="col-2">
    
    </div>
    <div class="col-8">
    <h2><em> <strong>Consultar Valor de Deuda</strong> </em></h2>
    <br>
<form action="{{route('consulta_abono')}}" method="POST">
@csrf
  <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Buscar" id="cedulaCli" name="cedulaCli" aria-label="Search"
    aria-describedby="search-addon" required>
  <button type="submit" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg></button>
</div>
</form>
    </div>
    <div class="col-2">
      
    </div>
  </div>
</div>


@stop
