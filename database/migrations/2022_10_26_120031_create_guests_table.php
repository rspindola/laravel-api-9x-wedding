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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('origin')->nullable();
            $table->string('rating')->nullable();
            $table->string('treatment')->nullable();
            $table->string('name');
            $table->integer('escorts')->default(0);
            $table->integer('total')->default(0);
            $table->integer('men')->default(0);
            $table->integer('women')->default(0);
            $table->integer('children')->default(0);
            $table->boolean('save_the_date')->default(0);
            $table->boolean('confirmation')->default(0);
            $table->boolean('invite')->default(0);
            $table->boolean('gift')->default(0);
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
        Schema::dropIfExists('guests');
    }
};
