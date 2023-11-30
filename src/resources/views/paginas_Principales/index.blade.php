<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->
    <!--estilos-->
    @yield('boot_js')
    <script src="/js/main.js"></script>

</head>

<body>
    <x-app-layout>
        <!--Aca estamos llamando a los inyectables-->
        <!--header-->
        @yield('header')
        <!--Ingresando los circulos con imagenes-->
        @yield('secciones')
        <!--Ingresando imagenes ilustrativas de los servicios-->
        @yield('secciones_imagenes')

        <!--footer-->
        @yield('footer_navegacion')

    </x-app-layout>



</body>

</html>
