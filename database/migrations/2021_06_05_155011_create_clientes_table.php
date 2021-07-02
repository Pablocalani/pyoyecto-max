<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('urldestino', 200);
            $table->string('whatsapp', 20);
            $table->string('nombre', 60);
            $table->string('referencia', 200);
            $table->double('cobrar');
            $table->string('descripcion', 1000);
            $table->string('foto', 100);
            $table->integer('cordenadax');
            $table->integer('cordenaday');
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
        Schema::dropIfExists('clientes');
    }
}
