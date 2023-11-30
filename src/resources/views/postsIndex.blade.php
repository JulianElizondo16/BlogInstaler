<!--Estas son directivas de "blade"-->
<!--Agregar la extension de html-->
@extends('paginas_Principales.postsIndex')

<!--Agregar la extension de inyectables-->
@extends('Inyectables_navegacion.navs')
@extends('Inyectables_navegacion.footer')
@extends('Inyectables_navegacion.header')
@extends('Inyectables_navegacion.secciones')
@extends('Inyectables_navegacion.SeccionesImagenes')
@extends('Inyectables_navegacion.links_boot_js')

<!--Crear seccion para hacer el llamado de la pestania-->
@section('title', 'Publicaciones')