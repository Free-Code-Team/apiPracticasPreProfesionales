<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('representante', 100);
            $table->char('estado', 1);
            $table->unsignedBigInteger('idEmpresa');
            $table->unsignedBigInteger('idEstudiante');
            $table->foreign('idEmpresa')->references('id')->on('empresas');
            $table->foreign('idEstudiante')->references('id')->on('estudiantes');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
};
