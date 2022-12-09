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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('CodReserva');
            $table->unsignedBigInteger('CodVehiculo');
            $table->date('fecha');
            $table->string('destino');
            $table->decimal('kilometros');
            $table->unsignedBigInteger('CodEmpleado');
            $table->timestamps();

            $table->foreign('CodVehiculo')->references('CodVehiculo')->on('vehiculos');
            $table->foreign('CodEmpleado')->references('CodEmpleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
