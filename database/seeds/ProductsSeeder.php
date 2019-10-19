<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(Products::class,80)->create();
    }
}
