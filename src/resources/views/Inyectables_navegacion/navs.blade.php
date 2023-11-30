@section('barras_navegacion')
    <style>
        .a-nav {
            font-size: 18px;
        }

        .button-nav {
            font-size: 18px;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            /* Asegura que el nav esté por encima de otros elementos */
            background-color: #333;
            /* Color de fondo del nav */
        }

        /*Aca colocamos el espaciado dentro de los textos*/
        .nav-item {
            margin-right: 80px;
            /* Ajusta el valor según la separación deseada */
        }

        .container {
            margin-top: 10px;
            /* Ajusta la parte superior del contenido principal para dejar espacio para el nav */
        }

        /*Aca editamos lo que es el de contacto o el boton mejor dicho*/
        #contact {
            width: 110px;
            height: 37px;
            line-height: 20px;
            text-align: center;
            cursor: pointer;
        }

        #contact:active {
            background: #444;
        }

        /*Aca es la ventana emergente del comentario*/
        /*Por si algun momento se quiere editar*/
        #contactForm {
            display: none;

            border: 6px solid 3324be;
            padding: 2em;
            width: 400px;
            text-align: center;
            background: #c1c8d4;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            border-radius: 16px;
        }

        input,
        textarea {
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            border-radius: 15px;
        }

        .textarea-form {
            height: 80px;
            resize: none;
        }
    </style>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mx-auto a-nav">
        <!-- Container wrapper -->
        <div class="container d-flex justify-content-between">
            <!-- Navbar brand -->
            <!-- Este HREF lo que hace el route es llamar a la ruta del controlador, mejor dicho el url -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <!-- Logo -->
                <img src="/img/imgPruebas/imagen.png" height="50" alt="Logo" loading="lazy" />
            </a>
            <!-- Links de las navs -->
            <ul class="navbar-nav mb-0 mb-lg-0">
                <li class="nav-item">
                    <!-- Este HREF lo que hace el route es llamar a la ruta del controlador, mejor dicho el url -->
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <!-- Este HREF lo que hace el route es llamar a la ruta del controlador, mejor dicho el url -->
                    <a class="nav-link" href="{{ route('comentarios.home') }}">Comentarios</a>
                </li>

            </ul>

            <!-- Botones de inicio de sesion y registrarse-->
            <div class="d-flex align-items-center">
                <!--Aca voy a agregar el boton para enviar el mensaje de comentario-->
                {{-- Creacion del formulario --}}


                <div id="contact" class=" btn btn-primary me-3">Contactanos</div>

                <div id="contactForm">
                    <h1 style="margin-bottom: 10px;">Comentarios</h1>

                    {{-- Aca estamos creando en el 'name='' ' va como se llaman las tablas donde se van a ingresar los datos. --}}
                    {{-- En el form va la vinculacion de los datos, necesita tener el metodo "POST" y en el 'action' estaria yendo la ruta del controlador. --}}

                    {{-- Esta ruta me esta devolviendo la ruta de GenerarComentarios --}}
                    <form class="container mt-4" action="{{ route('comentarios.generar') }}" method="POST">

                        @csrf {{-- GENERA UN TOKEN PARA QUE PUEDA FUNCIONAR. --}}

                        <input placeholder="Nombre" type="text" name="name" required class="form-control mt-3" />

                        <input placeholder="Email" type="email" name="email" required class="form-control mt-3" />

                        <label>

                            Selecciona el motivo:

                            <select name="motivo" class="form-select" required>
                                <option value="" disabled selected hidden>Selecciona un motivo</option>
                                <option value="Comentario">Comentario</option>
                                <option value="Queja">Queja</option>
                                <option value="Solicitud de ayuda">Necesito Ayuda</option>

                            </select>

                        </label>


                        <input maxlength="1000" placeholder="Mensaje" type="text" name="descripcion"
                            class="form-control mt-3" />
                        <button class="btn btn-primary mt-3" type="submit">Enviar</button>
                    </form>
                </div>


                {{-- Fin del formulario --}}



                <!--Aca voy a agregar el boton para enviar el mensaje de comentario-->
                <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                    <div class="relative flex h-16 items-center justify-between">

                        {{-- ESTA PARTE DEL BOTON LO VAMOS A ENCERRAR EN LA DIRECTIVA AUTH --}}
                        {{-- lo que va a hacer es verificar si esta autentificado --}}
                        @auth
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                                {{-- BOTON NOTIFICACION --}}
                                <button type="button"
                                    class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">View notifications</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                    </svg>
                                </button>

                                <!-- Profile dropdown -->
                                <div class="relative ml-3" x-data="{ open: false }">
                                    <div>
                                        <button x-on:click="open = true" type="button"
                                            class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="absolute -inset-1.5"></span>
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </button>
                                    </div>

                                    <!--
                              Dropdown menu, show/hide based on menu state.
                  
                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                                    <div x-show="open" x-on:click.away="open = false"
                                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <!-- Active: "bg-gray-100", Not Active: "" -->
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-1">Settings</a>
                                        {{-- ACA VAMOS A PONER LA FUNCIONALIDAD DEL BOTON PARA DESLOGUEAR LA CUENTA --}}
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1" id="user-menu-item-2"
                                                onclick="event.preventDefault(); this.closest('form').submit();">

                                                Sign out
                                            </a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            {{-- Y SI NO ESTA AUTENTIFICADO HACER ESO --}}
                        @else
                            <div>
                              <a href="{{route('login')}}"><button  type="button" class="btn btn-primary me-3">Iniciar sesion</button></a>
                              <a href="{{route('register')}}"><button type="button" class="btn btn-primary me-3">Registrar</button></a>
                            </div>
                        @endauth

                    </div>
                </div>

                {{-- ACA SON LOS BOTONES QUE YA TENEMOS PREDETERMINADOS, PERO OCUPAMOS HACER OTRAS COSAS --}}
                
            </div>
        </div>
        </div>
    </nav>
    <!--Aca voy a agregar el boton para enviar el mensaje de comentario-->
    <script src="/js/main.js"></script>

    <script>
        $(function() {
            $('#contact').click(function() {
                $('#contactForm').fadeToggle();
            })
            $(document).mouseup(function(e) {
                var container = $("#contactForm");

                if (!container.is(e.target) &&
                    container.has(e.target).length === 0) {
                    container.fadeOut();
                }
            });
        });
    </script>
@endsection
