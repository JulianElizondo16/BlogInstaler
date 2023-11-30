
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->
     <!--estilos-->   
     @yield('boot_js')
    
</head>
<body>
    {{-- EN ESTA ES LA PAGINA QUE SE ESTAN MOSTRANDO LOS COMENTARIOS --}}
    <x-app-layout>
           <!--Nav-->
    {{-- @yield('barras_navegacion') --}}
    {{-- ACA VAMOS A MOSTRAR LOS COMENTARIOS. --}}
    @yield('comentariosEstilos')

    <!--footer-->
    @yield('footer_navegacion')
    </x-app-layout>
 
    
    <!--script-->
</body>
</html>

