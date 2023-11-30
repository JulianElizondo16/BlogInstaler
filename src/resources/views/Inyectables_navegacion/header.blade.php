@section('header')

<div class="d-flex container-fluid" lc-helper="background" style="height:50vh;background:url(https://images.pexels.com/photos/1714341/pexels-photo-1714341.jpeg)  center / cover no-repeat;">

</div>
<div class="container mx-auto p-5 bg-gray-100 mt-[-100px] rounded-lg">
	<!-- Contenedor principal -->
	
	<div class="row">
	  <!-- Fila Bootstrap -->
	  
	  <div class="md:w-4/12 text-center md:text-left self-center ">
		<!-- Columna Bootstrap: Ocupa 4 de las 12 columnas en pantallas medianas -->
		<div class="lc-block border-r-4 text-gray-800 ">
		  <!-- Contenedor con clase personalizada "lc-block" y bordes -->
		  <div editable="rich">
			<!-- Elemento editable -->
			<p class="  display-4 text-gray-800">
			  <!-- Párrafo con clase de estilo "display-4" y color de texto "text-secondary" -->
			  Como podemos ayudarte?
			</p>
		  </div>
		</div>
		<!-- /lc-block -->
	  </div>
	  <!-- /col -->
	  
	  <div class="md:w-8/12">
		<!-- Columna Bootstrap: Ocupa 8 de las 12 columnas en pantallas medianas -->
		<div class="lc-block">
		  <!-- Contenedor con clase personalizada "lc-block" -->
		  <div editable="rich">
			<p class="display-4 text-gray-800">
			  <!-- Párrafo con clase de estilo "display-4" -->
			  Podemos crear el sitio web de tus negocios
			</p>
		  </div>
		</div>
		<!-- /lc-block -->
	  </div>
	  <!-- /col -->
	  
	</div>
	<!-- /row -->
	
	<div class="row">
	  <!-- Otra fila Bootstrap -->
	  
	  <div class="col-md-9 offset-md-1">
		<!-- Columna Bootstrap: Ocupa 9 de las 12 columnas en pantallas medianas y tiene un desplazamiento de 1 columna -->
		<div class="lc-block mt-5">
		  <!-- Contenedor con clase personalizada "lc-block" y margen superior -->
		  <div editable="rich">
			<!-- Elemento editable -->
			<p class="lead text-gray-800">
			  <!-- Párrafo con clase de estilo "lead" y color de texto "text-secondary" -->
			  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada placerat sit amet quis enim. Aliquam erat volutpat. In pellentesque scelerisque auctor.
			</p>
			<p class="lead text-gray-800">
			  <!-- Otro párrafo similar -->
			  Ut porta lacus eget nisi fermentum lobortis. Vestibulum facilisis tempor ipsum, ut rhoncus magna ultricies laoreet. Proin vehicula erat eget libero accumsan iaculis.
			</p>
		  </div>
		</div>
		<!-- /lc-block -->
	  </div>
	  <!-- /col -->
	  
	</div>
	<!-- /row -->
	
  </div>
  <!-- /container -->


<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@endsection