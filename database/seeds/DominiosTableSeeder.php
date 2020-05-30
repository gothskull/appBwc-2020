<?php

use Carbon\Carbon;
use App\Dominio;
use Illuminate\Database\Seeder;

class DominiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dominio::truncate();

        $dom                  = new Dominio;
        $dom->nameDominio     = "Godaddy";
        $dom->fechaRegDominio = Carbon::now();
        $dom->save();

        $dom                  = new Dominio;
        $dom->nameDominio     = "Dominio .Com";
        $dom->fechaRegDominio = Carbon::now();
        $dom->save();

        $dom                  = new Dominio;
        $dom->nameDominio     = "Namecheap";
        $dom->fechaRegDominio = Carbon::now();
        $dom->save();

        $dom                  = new Dominio;
        $dom->nameDominio     = ".Com";
        $dom->fechaRegDominio = Carbon::now();
        $dom->save();
    }
}
