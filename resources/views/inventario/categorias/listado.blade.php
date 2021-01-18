@extends('layouts.app')
@section('content')




<br>


<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  <h2><em> <strong>Listado de categorias</strong> </em></h2>
  <hr>
        <div class="alert alert-secondary" role="alert">

        <table class="table">

<thead>

<tr>
    <th scope="col">#</th>    
    <th scope="col">Nombre Categoria</th>
    <th scope="col">Descripcion</th>
</tr>

</thead>


</tbody>
@foreach($categorias as $c)
        <tr>
            <td>{{$c -> id}}</td>
            <td>{{$c -> nombreCategoria}}</td>
            <td>{{$c ->descripcion}}</td>
        </tr>
@endforeach
</tbody>


</table>    
  
                        
        </div>

  
  </div>
  <div class="col-md-1"></div>
</div>



@stop