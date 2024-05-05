<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('address_info', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->foreign('email')->references('email')->on('users');
            $table->unsignedBigInteger('phone');
            $table->integer('zipcode')->unsigned();
            $table->string('state');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_info');
    }
};
