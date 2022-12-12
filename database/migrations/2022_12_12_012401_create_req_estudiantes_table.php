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
        Schema::create('req_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('area', 50);
            $table->string('periodo', 100);
            $table->integer('cantidad');
            $table->unsignedBigInteger('idEmpresa');
            $table->foreign('idEmpresa')->references('id')->on('empresas');
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
        Schema::dropIfExists('req_estudiantes');
    }
};
