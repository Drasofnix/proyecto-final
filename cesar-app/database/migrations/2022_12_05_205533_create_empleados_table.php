<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('CodEmpleado');
            $table->string('nombre');
            $table->string('apellido');
            $table->decimal('salario');
            $table->unsignedBigInteger('CodOficina');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('CodOficina')->on('oficinas')->references('CodOficina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
