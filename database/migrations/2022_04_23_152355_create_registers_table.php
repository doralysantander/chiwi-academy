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
            $table->timestamps();
            $table->bigInteger('user_id')->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('masterclass_id')->foreign('masterclass_id')->references('id')->on('masterclasses');
            $table->primary(['user_id', 'masterclass_id']);
            /*
            $table->foreignId('iduser')->constrained('users');
            $table->foreignId('idmasterclass')->constrained('masterclasses');
            */
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
