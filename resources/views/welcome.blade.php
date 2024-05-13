@extends('layouts.layouts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var boton = document.getElementById('home');
        var contenidoOriginal = boton.textContent; // Guarda el contenido original

        // Cambiar el contenido del elemento al cargar la página
        boton.textContent = "HOME";
        boton.classList.add("text-red-600");

        // Evitar que el enlace recargue la página
        boton.addEventListener("click", function(event) {
            event.preventDefault();
        });
    });
</script>
<!-- se inserta cuerpo del trabajo -->
@section('content')
    <div class="flex flex-col h-auto w-auto">
        @include('layouts.inicial')
        @include('layouts.blogs')
        @include('layouts.footer')
    </div>
@endsection
