<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Distribuidor;

class DistribuidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $distribuidor = Distribuidor::create([
            'nombre' => 'GLOBAL FARMACEUTICA',
            'telefono' => '232323232',
            'email' => 'drogas@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.informacolombia.com/directorio-empresas/informacion-empresa/global-pharmaceutica-sa',
            'imagen' => 'global.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'MULTIDROGAS',
            'telefono' => '232323232',
            'email' => 'drogas2@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.multidrogas.com/Pagina/',
            'imagen' => 'multidrogas.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'MEDIMARCAS',
            'telefono' => '232323232',
            'email' => 'drogas3@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.facebook.com/MedimarcasSAS/',
            'imagen' => 'medimarcas.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'ROMA',
            'telefono' => '232323232',
            'email' => 'drogas4@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://tingotango.com.co/5994484780383498885/',
            'imagen' => 'roma.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'JN',
            'telefono' => '232323232',
            'email' => 'drogas5@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.laboratoriodelcaribe.com',
            'imagen' => 'jnfarmacia.png',
        ]);

     $distribuidor = Distribuidor::create([
            'nombre' => 'TORRES',
            'telefono' => '232323232',
            'email' => 'drogas6@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.farmaciatorres.com',
            'imagen' => 'torres.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'ECONOMIA',
            'telefono' => '232323232',
            'email' => 'drogas7@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.droguerialaeconomia.com/empresa/sucursales',
            'imagen' => 'economia.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'ETICOS',
            'telefono' => '232323232',
            'email' => 'drogas8@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.eticos.com/',
            'imagen' => 'eticos.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'PARIS ',
            'telefono' => '232323232',
            'email' => 'drogas9@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.drogueriasparis.com/index.php?view=contacto',
            'imagen' => 'paris.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'FARMACOS',
            'telefono' => '232323232',
            'email' => 'drogas12@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.drogueriapharmaco.com/',
            'imagen' => 'farmacos.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'ECOFARMA',
            'telefono' => '232323232',
            'email' => 'drogas14@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://www.laboratoriodelcaribe.com',
            'imagen' => 'ecofarma.png',
        ]);
     $distribuidor = Distribuidor::create([
            'nombre' => 'MASSALUD',
            'telefono' => '232323232',
            'email' => 'drogasa@farmaceutica.com',
            'ciudad' => 'Barranquilla',
            'direccion' => 'avenida 14preubas san carlos',
            'web' => 'https://directmap.org/sincelejo/10#google_vignette',
            'imagen' => 'massalud.png',
        ]);

    }
}
