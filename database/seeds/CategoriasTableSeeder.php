<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::truncate();

        $cat                 = new Categoria;
        $cat->nameCategoria = "Ecommercce";
        $cat->descCategoria  = "Vestibulum ullamcorper mauris at ligula. suscipit non, turpis.";
        $cat->estado         = 1;
        $cat->save();
        
        $cat                 = new Categoria;
        $cat->nameCategoria = "Corporativo";
        $cat->descCategoria  = "Vestibulum ullamcorper mauris at ligula. suscipit non, turpis.";
        $cat->estado         = 1;
        $cat->save();

        $cat                 = new Categoria;
        $cat->nameCategoria = "Blog";
        $cat->descCategoria  = "Suscipit non, turpis Vestibulum ullamcorper mauris at ligula..";
        $cat->estado         = 0;
        $cat->save();

        $cat                 = new Categoria;
        $cat->nameCategoria = "WPLMS";
        $cat->descCategoria  = "Mauris at ligula. s Vestibulum ullamcorper mauris at ligula. suscipit non, turpis.";
        $cat->estado         = 1;
        $cat->save();
    }
}
