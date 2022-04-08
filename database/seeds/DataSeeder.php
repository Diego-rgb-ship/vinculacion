<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'nombres' => 'Ricardo',
            'apellido_p' => 'Santos',
            'apellido_m' => 'Ramos',
            'no_identificacion' => '18040081',
            'rol' => 'Administrador',
            'carrera' => 'Otro',
            'password' => Hash::make('12345678'),
            'remember_token' => str_random(10),
        ]);
    }
}
