<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');

            //Primero crear de inmediato la relación con la tabla Users
            $table->bigInteger('user_id')->unsigned();
            $table->string('instagram')->nullable();
            $table->string('github')->nullable();
            $table->string('web')->nullable();

            $table->timestamps();

            //Configurar la relacion en sí. 
            $table->foreign('user_id')->references('id')->on('users')
            // Si se elmina un usuario tambien se elimine su Perfil
            // Si existe una actualizacion tambien pejudique a esta tabla
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
