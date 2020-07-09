<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatefrutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frutas', function (Blueprint $table) {
            $table->bigIncrements('id',50);
            $table->string('year',50);
            $table->string('descripcion',500);
            $table->float('precio',7, 2);
            $table->date('fecha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //mirar que pasa cuando se ejecuta el migrate 
    //mirar si se borra la base de datos
    public function down()
    {
        Schema::dropIfExists('frutas');
    }
}
