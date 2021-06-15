<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            "urldestino"=>"url1",
            "whatsapp"=>"59177823014",
            "nombre"=>"Pablo Calani Choque",
            "referencia"=>"calle moldes esquina beni nro114",
            "cobrar"=>"150",
            "descripcion"=>"caja con polera",
            "foto"=>"perfil",
            "cordenadax"=>"10",
            "cordenaday"=>"20",
            ]);
        Cliente::create([
            "urldestino"=>"url2",
            "whatsapp"=>"59171396656",
            "nombre"=>"Maria Vargas Soleto",
            "referencia"=>"calle charcas nro100 entre 25 de nayo y beni ",
            "cobrar"=>"90",
            "descripcion"=>"zapato",
            "foto"=>"persona",
            "cordenadax"=>"5",
            "cordenaday"=>"10",
            ]);
        Cliente::create([
            "urldestino"=>"url3",
            "whatsapp"=>"59177823589",
            "nombre"=>"Mario Ortis",
            "referencia"=>"2do anillo casa del camba",
            "cobrar"=>"150",
            "descripcion"=>"martillo de 2 kilos",
            "foto"=>"gente",
            "cordenadax"=>"40",
            "cordenaday"=>"25",
            ]);     
    }
}
