@section('secciones_imagenes')

<!--Aca estamos controlando el tamanio que queremos del padding con min-vh-50 podemos agregar mas o menos-->
<style>
	.img_seccion {
	  width: 18px;
	  height: 18px;
	}
  </style>
  
  <br>
  <br>
  <br>
  <section class="py-5">
	<div class="container">
	  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 md:mb-0 md:items-center">
		<div class="md:order-1 "> <!-- Cambiado el orden para la imagen izquierda -->
		  <div class=" text-center">
			<img class="w-1/2 ml-44 " src="/img/imgPruebas/iconos_secciones/analitica.png" alt="Imagen de análisis" />
		  </div>
		</div>
		<div class="md:order-2 mr-44"> <!-- Cambiado el orden para la imagen derecha -->
		  <div class="lc-block mb-5">
			<div editable="rich">
			  <h2 class="text-5xl font-semibold">Creación de Páginas Web</h2>
			  <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est. Etiam diam metus.</p>
			</div>
		  </div>
		  <div class="lc-block">
			<div class="flex items-center">
			  <img class="img_seccion" src="/img/imgPruebas/iconos_secciones/check.png" alt="Marca de verificación" />
			  <p class="ml-3">Lorem ipsum dolor sit amet</p>
			</div>
		  </div>
		  <div class="lc-block">
			<div class="flex items-center">
			  <img class="img_seccion" src="/img/imgPruebas/iconos_secciones/check.png" alt="Marca de verificación" />
			  <p class="ml-3">Consectetur adipiscing elit.</p>
			</div>
		  </div>
		  <div class="lc-block">
			<div class="flex items-center">
			  <img class="img_seccion" src="/img/imgPruebas/iconos_secciones/check.png" alt="Marca de verificación" />
			  <p class="ml-3">Aenean vel nisi in ipsum congue</p>
			</div>
		  </div>
		</div>
	  </div>
  
	  <br>
	  <br>
	  <br>
  
	  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:items-center">
		<div class="md:order-4"> <!-- Cambiado el orden para la imagen izquierda -->
		  <div class="lc-block text-center">
			<img class="w-1/2 ml-64   " src="/img/imgPruebas/iconos_secciones/computadora.svg" alt="Imagen de una computadora" />
		  </div>
		</div>
		<div class="md:order-2 ml-44  "> <!-- Cambiado el orden para la imagen derecha -->
		  <div class="lc-block mb-5">
			<div editable="rich">
			  <h2 class="text-5xl font-semibold">Compra de Espacio en la Nube</h2>
			  <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus est. Etiam diam metus.</p>
			</div>
		  </div>
		  <div class="lc-block">
			<div class="flex items-center">
			  <img class="img_seccion" src="/img/imgPruebas/iconos_secciones/check.png" alt="Marca de verificación" />
			  <p class="ml-3">Lorem ipsum dolor sit amet</p>
			</div>
		  </div>
		  <div class="lc-block">
			<div class="flex items-center">
			  <img class="img_seccion" src="/img/imgPruebas/iconos_secciones/check.png" alt="Marca de verificación" />
			  <p class="ml-3">Consectetur adipiscing elit.</p>
			</div>
		  </div>
		  <div class="lc-block">
			<div class="flex items-center">
			  <img class="img_seccion" src="/img/imgPruebas/iconos_secciones/check.png" alt="Marca de verificación" />
			  <p class="ml-3">Aenean vel nisi in ipsum congue</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  

@endsection