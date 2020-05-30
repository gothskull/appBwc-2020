<?php

use Carbon\Carbon;
use App\Servidor;
use Illuminate\Database\Seeder;

class ServidorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servidor::truncate();

        $serv                   = new Servidor;
        $serv->nameServidor     = "Hostgator";
        $serv->fechaRegServidor = Carbon::now();
        $serv->save();

        $serv                   = new Servidor;
        $serv->nameServidor     = "Godaddy";
        $serv->fechaRegServidor = Carbon::now();
        $serv->save();

        $serv                   = new Servidor;
        $serv->nameServidor     = "Namecheap";
        $serv->fechaRegServidor = Carbon::now();
        $serv->save();

        $serv                   = new Servidor;
        $serv->nameServidor     = "Blue Hosting";
        $serv->fechaRegServidor = Carbon::now();
        $serv->save();
    }
}
