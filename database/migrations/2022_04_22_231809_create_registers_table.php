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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_masterclass');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_masterclass')->references('id')->on('masterclasses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
