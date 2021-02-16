@extends('layouts.app')
@section('content')




<br>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  
  <div class="card">
  <div class="card-body" style="background-color: #e3f2fd;">
  <h2><em> <strong>Lista de Ventas</strong> </em></h2>
  
  
  </div>
  
<table class="table">
<br>
<thead>

<tr>
    <th scope="col">Id_Factura</th>    
    <th scope="col">Fecha</th>
    <th scope="col">Modo de Pago</th>
    <th scope="col">Numero de Cuotas</th>
    <th scope="col">Cantidad</th>
    <th scope="col">Cliente</th>
    <th scope="col">Nombre de Producto</th>
    
</tr>

</thead>


</tbody>
@foreach($ventas as $v)
        <tr>
            <td>{{$v ->id_factura}}</td>
            <td>{{$v ->fecha}}</td>
            <td>{{$v ->modo_pago}}</td>
            <td>{{$v ->num_cuotas}}</td>
            <td>{{$v ->cantidad}}</td>
            <td>{{$v ->nombreCliente}}</td>
            <td>{{$v ->nombreProducto}}</td>
            <td>
           
        </tr>
@endforeach
</tbody>


</table>  
    
  </div>
</div>

  
  
  </div>
  <div class="col-md-1"></div>
</div>
@stop