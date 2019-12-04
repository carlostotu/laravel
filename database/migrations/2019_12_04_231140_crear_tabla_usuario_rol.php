<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')
                ->references('id')
                ->on('rol')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            //fk_usuario_id es el nombre de la llave foranea
            $table->unsignedBigInteger('permiso_id');
            $table->foreign('permiso_id')
                ->references('id')
                ->on('permiso')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->boolean('estado');
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
        Schema::dropIfExists('usuario_rol');
    }
}
