<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Eletronicos']);
        DB::table('categories')->insert(['name' => 'Casa']);
        DB::table('categories')->insert(['name' => 'Moda Masculina']);
        DB::table('categories')->insert(['name' => 'Moda Feminina']);
        DB::table('categories')->insert(['name' => 'Pets']);
        DB::table('categories')->insert(['name' => 'Arte e Decoração']);
    }
}
