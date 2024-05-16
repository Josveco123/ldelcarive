<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laboratoriodelcaribe</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
</head>

<body>

    <div class="flex flex-col">
        <nav class="border-0 w-full h-auto  bg-gray-100 border-gray-400  dark:bg-gray-400 sticky top-0">

            <!-- parte correspondiente a la linea de publicidad -->

            <div class="flex items-center w-full h-auto bg-gray-50 border-2 border-white">
                <span
                    class="hidden text-red-900 mr-20 font-serif flex-grow text-right lg:text-lg xl:text-xl truncate  md:inline ">Fabricamos
                    y comercializamos medicamentos para el consumo humano
                </span>
                <div class="flex items-center gap-2 mr-20 ml-auto">
                    <a href="https://www.facebook.com/labdelcaribesa" target="_blank">
                        <img class="w-auto h-10" src="images/facebook.svg" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/laboratoriodelcaribesas/embed" target="_blank">
                        <img class="w-auto h-10" src="images/instagram.svg" alt="Instagram">
                    </a>
                    <a href="https://www.tiktok.com/@labodelcaribes.a.s" target="_blank">
                        <img class="w-auto h-10" src="images/tiktok.png" alt="TikTok">
                    </a>
                    <a href="https://api.whatsapp.com/send?text=Buen%20día%20quisiera%20consultar%20sobre%20&amp;phone=573135120781"
                        target="_blank" title="Chatea con Nosotros">
                        <img class="w-auto h-10" src="images/whatsapp.svg" alt="WhatsApp">
                    </a>
                </div>
            </div>

            <!-- comienza el navbar como tal -->

            <div class="w-auto h-auto  md:w-[95vw] flex flex-wrap items-center justify-between mx-auto px-10 py-2 mb-5">
                <a href="{{ route('welcome') }}" class="h-[65px] w-auto flex items-center space-x-3 mr-10">
                    <img src="{{ asset('images/logo.png') }}" class="max-h-full w-auto" alt="Logo">
                </a>
                <!--
                    bottom hamburguesa
                -->
                <div>
                    <div id="registrar"
                        class="flex items-center lg:hidden mr-8 order-3 space-x-3 lg:order-4 lg:space-x-0 pt-8">
                        <button id="menuVertical" type="button"
                            class="flex  items-center p-2 w-16 h-auto justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100">
                            <img class="w-full h-auto" src="{{ asset('images/menuLinea.png') }}" alt=""
                                srcset="">
                        </button>
                    </div>

                    <div id="navbar-user"
                        class="w-32 lg:w-auto h-auto  hidden  bg-white rounded-xl pt-1 justify-start lg:bg-gray-100 absolute z-100 lg:left-0 lg:static lg:top-0 lg:flex items-center lg:justify-center ">
                        <ul
                            class="  border-2 border-white pb-2 w-full lg:w-auto h-auto flex flex-col  list-none justify-start items-start font-normal sm:text-sm md:text-normal lg:text-md xl:text-xl rounded-lg space-y-2 lg:space-x-6 lg:flex-row ">
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl mt-0 lg:mt-2">
                                <a id="home" href="{{ route('welcome') }}"
                                    class="w-full px-2 bg-gray-100  text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Home</a>
                            </li>
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl">
                                <a id="nosotros" href="{{ route('nosotros') }}"
                                    class="w-full px-2 text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Nosotros</a>
                            </li>
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl">
                                <a id="portafolio" href="{{ route('productos2') }}"
                                    class="w-full px-2 text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Portafolio</a>
                            </li>
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl">
                                <a id="distribuidores" href="{{ route('distribuidor2') }}"
                                    class="w-full px-2 text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Distribuidores</a>
                            </li>
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl">
                                <a id="contacto" href="{{ route('contactos') }}"
                                    class="w-full px-2 text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-row justify-center items-center">
                    @if (Auth::check())
                    @hasrole('admin|master')
                            <div
                                class="hidden lg:flex w-auto h-9  px-2 mr-[2vw] flex-row relative justify-center items-center bg-gray-100 text-sm text-gray-900 hover:scale-105 hover:text-red-600 border-2 hover:rounded-lg hover:bg-gray-200 rounded-lg">
                                <a class="justify-center items-center" href="{{ url('/home') }}">
                                    C.R.U.D.
                                </a>
                            </div>
                    @endhasrole
                    @endif
                </div>

                <div id="menuRegister" class="flex order-1 lg:order-3 flex-row mr-10 items-center juatify-center mt-2">
                    <!-- menu register -->

                    <div class=" order-1 lg:order-3 flex-row justify-center items-center relative">

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <div id="register"
                                class="pt-4 flex flex-row justify-center items-center bg-gray-100 text-xl text-gray-900 hover:scale-105 hover:rounded-2xl hover:bg-gray-200 hover:text-red-600 hover:border-2 hover:border-white">
                                <button type="submit"
                                    class="flex w-full lg:w-8 lg:h-8 justify-center items-center">
                                    <img class="w-5 h-5 object-cover" src="{{ asset('images/usuario.png') }}"
                                        alt="usuario">
                                </button>
                                <span class="hidden ml-1 lg:flex text-sm justify-center items-center">
                                    @if (Auth::check())
                                        <span>{{ strtoupper(Str::limit(Auth::user()->name, 15)) }}</span>
                                    @else
                                        <span id="verRegistro" class="lg:ml-1 lg:block ml-1">Registrarse</span>
                                    @endif
                                </span>
                            </div>
                        </form>

                    </div>
                    <!-- Dropdown menu -->

                    <div id="user-register"
                        class=" hidden bg-white absolute top-32 sm:bg-white sm:text-sm sm:border-2 sm:rounded-md ">

                        @if (Route::has('login'))
                            <div class="flex flex-col justify-end  sm:text-sm md:text-md lg:text-xl text-gray-600 ">
                                @auth
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit"
                                            class="px-3 ring-1 ring-transparent transition focus:outline-none hover:text-black/70 hover:bg-gray-200 focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Log out
                                        </button>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition focus:outline-none  hover:text-black/70 hover:bg-gray-200 focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 ring-1 ring-transparent transition  hover:text-black/70 hover:bg-gray-200 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Registrese
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
        <!-- comienza la parte variable del cuerpo de la hoja -->
        <div class="mb-2">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/register.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Asignar elementos a variables
        var navbarUser = document.getElementById('navbar-user');
        var registro = document.getElementById('user-register');

        // Función para mostrar el menú vertical
        function showMenu(element) {
            element.classList.remove('hidden');
            element.classList.add('flex');
        }

        // Función para ocultar el menú vertical
        function hideMenu(element) {
            element.classList.add('hidden');
            element.classList.remove('flex');
        }

        // Evento al pasar el mouse por encima del menú vertical
        document.getElementById('menuVertical').addEventListener('mouseenter', function() {
            showMenu(navbarUser);
        });

        // Evento al quitar el mouse de encima del menú vertical
        document.getElementById('navbar-user').addEventListener('mouseout', function(e) {
            if (!isMouseOverElement(navbarUser, e)) {
                hideMenu(navbarUser);
            }
        });

        // Evento al pasar el mouse por encima del menú de registro
        document.getElementById('menuRegister').addEventListener('mouseenter', function() {
            showMenu(registro);
        });

        // Evento al quitar el mouse de encima del menú de registro
        document.getElementById('user-register').addEventListener('mouseout', function(e) {
            if (!isMouseOverElement(registro, e)) {
                hideMenu(registro);
            }
        });

        // Evento al hacer clic en cualquier parte del documento
        document.addEventListener('click', function(e) {
            if (!isMouseOverElement(navbarUser, e.target) && !isMouseOverElement(registro, e.target)) {
                hideMenu(navbarUser);
                hideMenu(registro);
            }
        });

        // Función para verificar si el cursor está dentro del elemento
        function isMouseOverElement(element, event) {
            var rect = element.getBoundingClientRect();
            return event.clientX >= rect.left && event.clientX <= rect.right &&
                event.clientY >= rect.top && event.clientY <= rect.bottom;
        }
    </script>
</body>

</html>
