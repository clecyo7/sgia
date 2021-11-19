<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->char('status');
            $table->date('dt_nasci')->nullable();
            $table->string('end_cep')->nullable();
            $table->string('end_rua')->nullable();
            $table->string('end_numero')->nullable();
            $table->string('end_complemento')->nullable();
            $table->string('end_bairro')->nullable();;
            $table->string('end_cidade')->nullable();
            $table->string('end_uf')->nullable();
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
        Schema::dropIfExists('users');
    }
}
