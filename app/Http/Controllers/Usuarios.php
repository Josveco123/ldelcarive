<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Usuarios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->paginate(10);

        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'telefono' => 'required|string|max:20',
                'roles' => 'required', // Asegura que se seleccione al menos un rol
            ], [
                'name.required' => 'El campo nombre es obligatorio.',
                'email.required' => 'El campo email es obligatorio.',
                'email.email' => 'El formato del email no es válido.',
                'email.unique' => 'Este email ya está en uso.',
                'password.required' => 'El campo contraseña es obligatorio.',
                'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
                'telefono.required' => 'El campo teléfono es obligatorio.',
                'roles.required' => 'Debe seleccionar al menos un rol.',
            ]);

            // Resto del código para almacenar el usuario...

            User::create([
                'name'=> $request->name,
                'email'=>  $request->email,
                'email_verified_at'=> now(),
                'razon_social'=>'Laboratorio del Caribe',
                'whatsapp'=> '99999999999',
                'ciudad'=> 'Sincelejo',
                'password'=> bcrypt($request->password),
                'remember_token'=> Str::random(10),
             ])->assignRole($request->roles);

            // Si se ha almacenado correctamente, redirigir o hacer cualquier acción necesaria
            return redirect()->back()->withInput()->with('success', 'Usuario creado correctamente.');
        } catch (ValidationException $e) {
            // Si la validación falla, redirigir de vuelta al formulario con los errores
            return redirect()->back()->withInput()->withErrors($e->validator->errors());
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('user.edit', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
