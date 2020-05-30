<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nameProyecto',100)->unique();
            $table->string('urlProyecto',120)->unique();
            $table->text('descProyecto',300)->nullable();
            $table->timestamp('fecha_inicio');
            $table->string('logo')->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('servidor_id');
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('dominio_id');
            $table->unsignedBigInteger('accesos_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
