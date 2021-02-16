
<nav class="navbar navbar-expand-sm navbar-light bg-dark">
  
    
     
        <li class="breadcrumb-item"><a href="{{url('informacion/somos')}}" class="text-white bg-dark">Sobre Mueblesorts</a></p></li>
        <li class="breadcrumb-item"><a href="{{url('informacion/contacto')}}" class="text-white bg-dark">Servicio al cliente</a></p></li>
        <li class="breadcrumb-item active" aria-current="page">
        <a href="#" class="text-white bg-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> Telefono: 01284-1742-22</a></p>
        </li>
        <li class="breadcrumb-item"><a href="#" class="text-white bg-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg>mueblesorts@hotmail.com</a></li>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <ul class="navbar-nav">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white bg-dark text-align-center" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    
    
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>{{ Auth::user()->name }}</a>
<div class="dropdown-menu">
    <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}" >
                            @csrf

                            <li>
                            <a class="text-dark dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}</a></li>
                        </form>
      </div>
  
    
  </li>
  </ul>



</nav>

<br>
<div class="text-center">
 <a class="" href="{{url('/')}}"> <img src="{{ URL::to('imagenes/logo2.png') }}" width="140" heidth="150"></a>
</div>


<hr>

<ul class="nav text-light bg-light">

<!--

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cliente</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="">Clientes</a>
      <a class="dropdown-item" href="">Clientes Favoritos</a>
      
      
    
    </div>
  </li>
  -->
<!-- CLIENTES -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('/clientes/visualizar')}}">Lista de Clientes</a>
      
      
      
      
      
    </div>
</li>

<!-----SERVICIOS----->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('/productos')}}">Productos disponibles</a>
      
      
      
    </div>
  </li>

  

  <!-----VENTAS----->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ventas</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{route('registroVen')}}">Registro Ventas</a>
      <a class="dropdown-item" href="{{url('ventas/visualizar')}}">Mostrar Ventas</a>
      
      
      
    </div>
  </li>

    <!-- Categorias -->

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('categoria-sala')}}">Sala</a>
      <a class="dropdown-item" href="{{url('categoria-comedor')}}">Comedor</a>
      <a class="dropdown-item" href="{{url('categoria-estudio')}}">Estudio</a>
      <a class="dropdown-item" href="{{url('categoria-dormitorio')}}">Dormitorio</a>
      
    
    </div>
  </li>

<!-----deuda----->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Endeudamiento</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('/deuda/consultar')}}">Consultar Deuda</a>
          
    </div>
  </li>
<!-----pagos----->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Abono</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('abono/consulta')}}">Realizar abono</a>
          
    </div>
  </li>
  
</ul>



  


<!--///////////////////////////////////////////////////////////////////////////-->
