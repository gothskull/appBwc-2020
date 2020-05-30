<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(CategoriasTableSeeder::class);
       $this->call(ServidorsTableSeeder::class);
       $this->call(DominiosTableSeeder::class);
       $this->call(RepresentantessTableSeeder::class);
       $this->call(PlansTableSeeder::class);
    }
}
