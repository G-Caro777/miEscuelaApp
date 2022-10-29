<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            "n_control" => "2012141516102091",
            "nombre" => "Francisco López",
            "edad" => "18",
            "sexo" => "1",
            "fecha_nacimiento" => "2004-12-01",
            "domicilio" => "Calle X col Y CP 0000",
            "telefono" => "6676454384",

        ]);

        Alumno::create([
            "n_control" => "2012141516102091",
            "nombre" => "Francisco López",
            "edad" => "18",
            "sexo" => "1",
            "fecha_nacimiento" => "2004-12-01",
            "domicilio" => "Calle X col Y CP 0000",
            "telefono" => "6676454384",

        ]);

        Alumno::create([
            "n_control" => "2012141516102091",
            "nombre" => "Francisco López",
            "edad" => "18",
            "sexo" => "1",
            "fecha_nacimiento" => "2004-12-01",
            "domicilio" => "Calle X col Y CP 0000",
            "telefono" => "6676454384",

        ]);

        Alumno::create([
            "n_control" => "2012141516102091",
            "nombre" => "Francisco López",
            "edad" => "18",
            "sexo" => "1",
            "fecha_nacimiento" => "2004-12-01",
            "domicilio" => "Calle X col Y CP 0000",
            "telefono" => "6676454384",

        ]);

    }
}
