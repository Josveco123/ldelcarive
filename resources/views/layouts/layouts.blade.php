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
        <nav class="border-0 w-full min-h-min  bg-gray-100 border-gray-400  dark:bg-gray-400 sticky top-0 z-[500]">

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

            <div id="logo"
                class="w-auto h-auto  md:w-[95vw] flex flex-wrap items-center justify-between mx-auto pl-10 pr-3 py-2 mb-5">
                <a href="{{ route('welcome') }}"
                    class="h-[50px] sm:md:h-[65px] md:h-[80px] w-auto flex items-center space-x-3 mr-3">
                    <img src="{{ asset('images/logo.png') }}" class="max-h-full w-auto" alt="Logo">
                </a>
                <!--
                    bottom hamburguesa
                -->
                <div id="menulinea">
                    <div id="registrar"
                        class="flex items-center lg:hidden mr-3 order-3 space-x-3 lg:order-4 lg:space-x-0 pt-8">
                        <a id="mnu-user-vertical" type="button"
                            class="flex  items-center p-2  w-10  sm:w-12  md:w-14 lg:w-16 h-auto justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100">
                            <img class="w-full h-auto" src="{{ asset('images/menuLinea.png') }}" alt=""
                                srcset="">
                        </a>
                    </div>

                    <div id="mnu-user"
                        class="mt-7 w-24 text-xs ml-[-30px] md:ml-[-15px] sm:w-28 md:w-32 lg:w-auto h-auto  hidden  bg-gray-100 border-rbl-4 border-white rounded-xl pt-1 justify-start lg:bg-gray-100 absolute z-100 lg:left-0 lg:static lg:top-0 lg:flex items-center lg:justify-center ">
                        <ul
                            class="pb-2 w-full lg:w-auto h-auto flex flex-col  list-none justify-start items-start font-normal sm:text-sm md:text-normal lg:text-lg xl:text-2xl rounded-lg space-y-2 lg:space-x-6 lg:flex-row ">
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

                <div id="crud" class="flex flex-row justify-center items-center mt-8">
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

                <!-- menu register -->

                <div id="gralregistro" class="flex order-1 lg:order-3 flex-row mr-10 items-center juatify-center mt-2">

                    <div id="menuregister-1"
                        class="z-[50] h-auto order-1 lg:order-3 flex-row justify-center items-center  relative">

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <div id="mostrarregistra"
                                class="mt-8 w-auto h-auto p-2 flex flex-col justify-center items-center bg-gray-100 text-xl text-gray-900 border-2 rounded-full hover:scale-105 hover:rounded-2xl hover:bg-gray-200 hover:text-red-600 hover:border-2 hover:border-white">
                                <a type="submit" class="flex w-full lg:w-8 lg:h-8 justify-center items-center">
                                    <img class="w-5 h-5 object-cover" src="{{ asset('images/usuario.png') }}"
                                        alt="usuario">
                                </a>
                                <span class="hidden ml-1 sm:flex text-sm justify-center items-center">
                                    @if (Auth::check())
                                        <span>{{ strtoupper(Str::limit(Auth::user()->name, 15)) }}</span>
                                    @else
                                        <span id="verRegistro" class="lg:ml-1 lg:block ml-1">Validarse</span>
                                    @endif
                                </span>
                            </div>
                        </form>

                    </div>
                    <!-- Dropdown menu -->

                    <div id="mnu-registro"
                        class="z-[60] hidden bg-gray-100 text-sm border-rbl-2 rounded-md absolute ml-[-15px] sm:ml-0 mt-[180px] md:mt-[210px]">

                        @if (Route::has('login'))
                            <div class="flex flex-col justify-end  sm:text-sm md:text-md lg:text-xl text-gray-600">
                                @auth
                                    <div>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="rounded-md px-3 py-2 ring-1 ring-transparent transition focus:outline-none hover:text-black/70 hover:bg-gray-200 focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                Log out
                                            </button>
                                        </form>
                                    </div>
                                @else
                                    <div>
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
                                    </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Asignar elementos a variables
            var navbarUser = document.getElementById('mnu-user');
            var registro = document.getElementById('mnu-registro');
            var userButton = document.getElementById('mnu-user-vertical');
            var registerButton = document.getElementById('mostrarregistra');

            // Función para mostrar u ocultar el menú vertical
            function toggleMenu(element) {
                element.style.display = element.style.display === 'none' ? 'flex' : 'none';
            }

            // Evento al hacer clic en el menú vertical de usuario
            userButton.addEventListener('click', function(e) {
                toggleMenu(navbarUser);
                // Detenemos la propagación del evento para evitar que se active el cierre inmediato del menú
                e.stopPropagation();
            });

            // Evento al hacer clic en el menú de registro
            registerButton.addEventListener('click', function(e) {
                toggleMenu(registro);
                // Detenemos la propagación del evento para evitar que se active el cierre inmediato del menú
                e.stopPropagation();
            });

            // Función para manejar el evento de cambio de tamaño de la ventana
            function handleResize() {
                if (window.innerWidth > 1024) { // Reemplaza 992 por el ancho deseado para el tamaño 'lg'
                    navbarUser.style.display = 'flex';
                    registro.style.display = 'none';
                } else {
                    navbarUser.style.display = 'none';
                    registro.style.display = 'none';
                }
            }

            // Suscribir la función al evento 'resize' de la ventana
            window.addEventListener('resize', handleResize);

            // Ejecutar la función una vez al cargar la página para verificar el tamaño inicial de la ventana
            handleResize();

            // Si se hizo clic en algún lugar que no sea el botón de usuario o el menú de usuario, y el tamaño de la pantalla es menor o igual a lg, cerramos el menú de usuario
            document.addEventListener('click', function(e) {
                if (e.target !== userButton && !navbarUser.contains(e.target) && window.innerWidth <=
                    1024) {
                    navbarUser.style.display = 'none';
                } else {
                    navbarUser.style.display = 'flex';
                }

                // Si se hizo clic en algún lugar que no sea el botón de registro o el menú de registro, cerramos el menú de registro
                if (e.target !== registerButton && !registro.contains(e.target)) {
                    registro.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
