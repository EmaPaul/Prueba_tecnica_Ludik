<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
                [
                    'Nombre' => 'Producto 1',
                    'Descripción' => 'Descripción del producto 1',
                    'Precio' => 100,
                    'Stock' => 50,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'Nombre' => 'Producto 2',
                    'Descripción' => 'Descripción del producto 2',
                    'Precio' => 150,
                    'Stock' => 30,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'Nombre' => 'Producto 3',
                    'Descripción' => 'Descripción del producto 3',
                    'Precio' => 200,
                    'Stock' => 20,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'Nombre' => 'Producto 4',
                    'Descripción' => 'Descripción del producto 4',
                    'Precio' => 250,
                    'Stock' => 10,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'Nombre' => 'Producto 5',
                    'Descripción' => 'Descripción del producto 5',
                    'Precio' => 300,
                    'Stock' => 40,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'Nombre' => 'Producto 6',
                    'Descripción' => 'Descripción del producto 6',
                    'Precio' => 350,
                    'Stock' => 25,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'Nombre' => 'Producto 7',
                    'Descripción' => 'Descripción del producto 7',
                    'Precio' => 400,
                    'Stock' => 15,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'Nombre' => 'Producto 8',
                    'Descripción' => 'Descripción del producto 8',
                    'Precio' => 450,
                    'Stock' => 35,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'Nombre' => 'Producto 9',
                    'Descripción' => 'Descripción del producto 9',
                    'Precio' => 500,
                    'Stock' => 5,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'Nombre' => 'Producto 10',
                    'Descripción' => 'Descripción del producto 10',
                    'Precio' => 550,
                    'Stock' => 45,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            
            
        ]);
        
    }
}
