<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Producto;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
        ClienteSeeder::class,
        ProveedorSeeder::class,
        ProductoSeeder::class
       ]);
    }
}
