@extends('layouts.app')
@section('content')


<br>
<br>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  
  
  

<form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <h5><strong>Formulario de Contacto</strong></h5>
<br>
 
<div class="form-outline mb-4">
    <input type="text" id="form3Example3" class="form-control" />
    <label class="form-label" for="form3Example3">Nombre</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" />
    <label class="form-label" for="form3Example3">Correo</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="number" id="form3Example4" class="form-control" />
    <label class="form-label" for="form3Example4">Telefono</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">Asunto</label>
  </div>

 
  <!-- Submit button -->
  <button type="submit" class="btn btn-warning btn-block mb-4">Enviar</button>

</form>

  
  </div>
  <div class="col-md-3"></div>
</div>







@stop

