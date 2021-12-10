<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReuniaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reuniaos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('departamentoReu')->constrained('departamentos')->onDelete('cascade');
            $table->date('data');
            $table->string('local');
            $table->time('horario');
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
        Schema::dropIfExists('reuniaos');
    }
}
