<nav class="bg-gray-800" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                {{-- LOGOTIPO --}}
                <a href="{{ route('home') }}" class="flex flex-shrink-0 items-center">
                    <img class="h-10 w-auto" src="/img/imgPruebas/imagen.png" height="50" alt="Logo"
                        loading="lazy" />
                </a>
                {{-- MENU LG --}}
                <div class="hidden sm:ml-64   sm:block ">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('home') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Inicio</a>
                        <a href="{{ route('post.index') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Publicaciones</a>
                        <a href="{{ route('comentarios.home') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Comentarios</a>
                    </div>
                </div>
            </div>

            {{-- ESTA PARTE DEL BOTON LO VAMOS A ENCERRAR EN LA DIRECTIVA AUTH --}}
            {{-- lo que va a hacer es verificar si esta autentificado --}}
            @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    {{-- BOTON NOTIFICACION --}}
                    <button type="button"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
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
                                {{-- ACA LO ESTAMOS HACIENDO CON EL SRC DE LA FOTO DEL USUARIO ES QUE SELECCIONE UNA FOTO CON LAS INICIALES --}}
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
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
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            {{-- ACA ESTA RUTA DE PROFILE LO QUE HACE ES HACER LA REFERENCIA A LA RUTA DONDE ESTA EL PERFIL DEL USUARIO. --}}
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil</a>

                            @can('admin.home')
                                {{-- AHORA ACA EN SETTINGS NO VAMOS A HACER NADA POR AHORA PERO TENGO EN MENTE HACER UNA OPCION QUE NOS DIRIJA A LAS OPCIONES DEL ADMIN --}}
                                <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-1">Dashboard</a>
                            @endcan

                            {{-- ACA VAMOS A PONER LA FUNCIONALIDAD DEL BOTON PARA DESLOGUEAR LA CUENTA --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    onclick="event.preventDefault(); this.closest('form').submit();">

                                    Cerrar Sesion
                                </a>
                            </form>

                        </div>
                    </div>
                </div>
                {{-- Y SI NO ESTA AUTENTIFICADO HACER ESO --}}
            @else
                <div>
                    <a href="{{ route('login') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Login</a>
                    <a href="{{ route('register') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Register</a>
                </div>
            @endauth

        </div>
    </div>

</nav>
