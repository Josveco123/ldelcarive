<?php


namespace App\Http\Controllers;

use App\Models\Visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Dompdf\Dompdf;

class FichaController extends Controller
{
    public function mostrarficha(Request $request)
    {
        $producto = json_decode($request->producto);

        // Si se está enviando una solicitud POST, es para guardar una visita
        if ($request->isMethod('post')) {

            // Obtener los datos del usuario autenticado

            $usuario = auth()->user();
            // Crear una nueva instancia de Visita con los datos recibidos
            $visita = new Visita();
            $visita->nombre = $usuario->name;
            $visita->razon_social = $usuario->razon_social;
            $visita->whatsapp = $usuario->whatsapp;
            $visita->ciudad = $usuario->ciudad;
            $visita->producto = $producto->nombre;
            $visita->fecha_visita = now(); // Obtener la fecha actual
            $visita->user_id = $usuario->id; // Obtener el ID del usuario autenticado

            // Guardar la visita en la base de datos
            $visita->save();


        }

        // Si hay un archivo especificado, lo pasamos a la vista

        if ($producto->ficha) {
            return view('layouts.mostrar-ficha', ['ficha' => $producto->ficha]);
        }
    }
}
