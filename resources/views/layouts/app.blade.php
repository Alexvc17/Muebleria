<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!--Cargar primero los estilos-->
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
        <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">



        

        <!-- Styles -->
        <!--
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        -->

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        

     
    </head>

    <body class="antialiased">
    
        @include('layouts.barra')

        <div>

            @yield('content')

        </div>

        @include('layouts.footer')



        <!--Luego los scripts-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>



