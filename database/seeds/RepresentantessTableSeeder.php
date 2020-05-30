<?php

use App\Representante;
use Illuminate\Database\Seeder;

class RepresentantessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Representante::truncate();

        $rep                     = new Representante;
        $rep->nameRepresentante  = "Hernando J ";
        $rep->lNameRepresentante = "Chaves";
        $rep->mailRepresentante  = "chaves@hot.com";
        $rep->telRepresentante   = "3213141515";
        $rep->save();

        $rep                     = new Representante;
        $rep->nameRepresentante  = "Jorge A ";
        $rep->lNameRepresentante = "Manrique";
        $rep->mailRepresentante  = "joorge@hot.com";
        $rep->telRepresentante   = "3224608111";
        $rep->save();

        $rep                     = new Representante;
        $rep->nameRepresentante  = "Olga J ";
        $rep->lNameRepresentante = "Benavides";
        $rep->mailRepresentante  = "olga@gmail.com";
        $rep->telRepresentante   = "3202896569";
        $rep->save();

        $rep                     = new Representante;
        $rep->nameRepresentante  = "Martha L ";
        $rep->lNameRepresentante = "Cruz B";
        $rep->mailRepresentante  = "martha@gmail.com";
        $rep->telRepresentante   = "3213141515";
        $rep->save();
    }
}
