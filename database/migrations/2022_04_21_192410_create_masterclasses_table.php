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
        Schema::create('masterclasses', function (Blueprint $table) {
            $table->id('id');
            $table->string('title')->nullable();
            $table->boolean('estado')->nullable();
            $table->boolean('destacado')->default(0);
            $table->date('fecha');
            $table->time('hora');
            $table->integer('numero_participantes');
            $table->char('descripcion', 100);
            $table->string('imagen_url')->nullable();
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
        Schema::dropIfExists('masterclasses');
    }
};
