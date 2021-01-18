@extends('layouts.app')
@section('content')


<div class="text-center">
 <a class="" href="{{url('/')}}"> <img src="{{ URL::to('/imagenes/somos.png') }}"></a>
</div>
<br>


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">

<p class="note note-light">
<hr>

  Somos un equipo renovado y talentoso, con el objetivo de brindarte la mejor experiencia. Sonreimos, saludamos y nos apoyamos
  , porque es la base de nuestra confianza logrando asi un buen trabajo en equipo. Somos apasionados, comprometidos, innovadores y 
  evolucionamos cada dia para entregarte lo mejor. Disfrutamos lo que hacemos y estamos conectados en la misma onda
  <br>
  <hr>
</p></div>






  <div class="col-md-2"></div>
</div>
<br><br>

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-6">
  
  
  
  
 <div class="card mb-3" style="max-width: 800px">
  <div class="row g-0">
    <div class="col-md-4">
      <img
        src="{{URL::to('imagenes/mision.jpg')}}"
        alt="..."
        class="img-fluid"
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Nuestra Mision</h5>
        <p class="card-text">
          Ser la cadena mas importante de tiendas de muebles en la region, 
          creemos en lo que somos y en
           lo que hacemos, buscamos ser versátiles e innovadores, pero siempre manteniendo nuestra propia esencia.
        </p>
        
      </div>
    </div>
  </div>
</div>



  </div>
  <div class="col-md-4"></div>
</div>
<br>

<br>
<br>

<!--////////////////////////////////////////////////-->







<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-6">
  
  <div class="card mb-3" style="max-width: 800px">
  <div class="row g-0">
    <div class="col-md-4">
      <img
        src="{{URL::to('imagenes/vision.jpg')}}"
        alt="..."
        class="img-fluid"
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Nuestra Vision</h5>
        <p class="card-text">
          Crear una experiencia de compra que inspire y sorprenda a traves de los detalles, para democratizar el buen diseño, 
          cumplir sueños y hacer que todos los clientes quieran volver.
        </p>
        
      </div>
    </div>
  </div>
</div>
  
  
  
  </div>
  <div class="col-md-2"></div>
</div>




<!--///////////////////////////////////////////////-->


@stop