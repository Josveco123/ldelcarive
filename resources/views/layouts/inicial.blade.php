<script>
    document.addEventListener("DOMContentLoaded", function() {
        var boton = document.getElementById('home');
        var contenidoOriginal = boton.textContent; // Guarda el contenido original

        // Cambiar el contenido del elemento al cargar la página
        boton.textContent = "HOME";
        boton.classList.add("text-red-600", "bg-white");

        // Evitar que el enlace recargue la página
        boton.addEventListener("click", function(event) {
            event.preventDefault();
        });
    });
</script>

<div id="pagin1" class="pt-5 w-full h-auto flex flex-col sm:flex-col gap-x-8 pl-5 lg:flex-row ">

    <!-- foto portada -->
    <div class="object-cover w-full order-1 mr-5 lg:order-2 p-1 h-[75vh]  overflow-hidden">
        <img class="object-cover w-full h-full border rounded-3xl" src="{{ asset('images/portada.png') }}" alt="" srcset="">
    </div>

    <!-- google maps --->

    <div class="w-full  h-auto mt-10 lg:mt-0 lg:w-[100vh] lg:h-[75vh] flex flex-col order-2 lg:order-1 ">
        <div class="flex flex-col justify-center h-full lg:h-40 sm:mx-14 lg:mx-28 mr-5 -0 pt-1">
            <span class="flex flex-row justify-center px-2 text-red-600 text-lg md:text-1xl lg:text-2xl ">
                Como llegar
            </span>
            <a class="flex w-full h-full hover:border-2 border-red-600 hover:rounded-3xl hover:p-1 hover:bg-red-100" href="https://maps.app.goo.gl/o8d4LRH5MfBD1NS36" target="_blank">
                <img class="rounded-3xl w-full h-full" src="{{ asset('images/nos61.jpg') }}" alt=""
                    srcset="">
            </a>

        </div>

        <!-- Distribuidores --->

        <div class="max-w-full h-auto lg:h-[50vh] mx-5 mt-8 ">
            <span class="text-lg md:text-1xl lg:text-2xl text-red-600 flex justify-center">Canal de distribucion</span>
            <div
                class="w-auto h-full pl-3 lg:pl-10 mr-5 pt-2 grid grid-cols-2 justify-center items-center lg:grid-cols-3 gap-x-14 lg:gap-x-6 gap-y-6 lg:gap-y-0">
                @foreach ($distribuidor as $dist)
                    <a class="flex flex-row justify-center w-auto rounded-full bg-gray-50 border-2 border-red-200 border-dotted "
                        href="{{ $dist->web }}" target="_blank" rel="noopener noreferrer">
                        <img class="h-28 lg:h-[4.3vw] border bg-gray-100 hover:scale-75 lg:hover:scale-100 hover:border-2 rounded-xl  border-red-200 hover:rounded-t-full  hover:p-1 hover:shadow-inner hover:shadow-red-600"
                            src="imagendist/{{ $dist->imagen }}" alt={{ $dist['distlogo'] }}>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</div>
