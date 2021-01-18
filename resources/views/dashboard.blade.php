@extends('layouts.app')
@section('content')



<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{URL::to('imagenes/1.jpg')}}"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">¿Ya elegiste tu favorito?</h3>
        <p>Nuevos colores para nuestros sofas con diseño que resaltaran en tus espacios</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{URL::to('imagenes/2.jpg')}}"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">¡2021!</h3>
        <p>Nuevo año, Nuevas tendencias</p>
      </div>
    </div>
    <div class="carousel-item">
      
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{URL::to('imagenes/3.jpg')}}"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">¡Nuevo Sofa Lucy!</h3>
        <p>Sin importar el estilo que prefieras, siempre llamara la atencion.</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
 <br>
<br>
<br>














<div class="text-center"><h2><em> <strong>Preguntas Frecuentes</strong> </em></h2></div>

<br>


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  
  
  <div class="card text-left">
  <div class="card-header"><strong>¿Dónde puedo comprar muebles?</strong></div>
  <div class="card-body">
    <p class="card-text">Adquiere tus enseres en una tienda física donde vendan muebles para el hogar o en Internet. Recuerda que puedes ingresar a tu portal web de confianza y pedir que te los lleven hasta la puerta de tu casa.</p>
    
    
  </div>
  
</div>



<div class="card text-left">
  <div class="card-header"><strong>¿Cómo adquiero muebles economicos?</strong></div>
  <div class="card-body">
    <p class="card-text">Ingresa a tu tienda virtual preferida y consulta el precio de los muebles que hay en el catálogo; fíjate en las promociones vigentes y aprovecha los descuentos por pagos con tarjetas de los bancos seleccionados.</p>
    
    
  </div>
  
</div>


<div class="card text-left">
  <div class="card-header"><strong>¿Con qué materiales se fabrican los muebles?</strong></div>
  <div class="card-body">
    <p class="card-text">Adquiere tus enseres en una tienda física donde vendan muebles para el hogar o en Internet. Recuerda que puedes ingresar a tu portal web de confianza y pedir que te los lleven hasta la puerta de tu casa.</p>
    
    
  </div>
  
</div>


<div class="card text-left">
  <div class="card-header"><strong>¿Cómo adquirir muebles de buena calidad?</strong></div>
  <div class="card-body">
    <p class="card-text">Tómate el tiempo necesario para fijarte en las características propias del mueble. Presta atención a los materiales y que las terminaciones estén perfectamente pulidas. Intenta adquirir enseres resistentes ante los derrames de líquidos o la suciedad</p>
    
    
  </div>
  
</div>



  <div class="col-md-2"></div>
</div>

@stop


