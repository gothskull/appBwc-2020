<?php

use App\Proyecto;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proy  = new Proyecto;
        $proy->nameProyecto = "Bogota Web Company";
        $proy->urlProyecto  = "bogotawebcompany.com";
        $proy->descProyecto = "Phasellus magna. Cras dapibus.Phasellus magna. Cras dapibus.";
        $proy->fecha_inicio = Carbon::now();
        $proy->logo = "logo";
        $proy->
        $proy->save();

    }
}
