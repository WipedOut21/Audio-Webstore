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
        Schema::create('payment_info', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->foreign('email')->references('email')->on('users');
            $table->integer('card_number')->unsigned()->unique();
            $table->string('expiry');
            $table->integer('cvv')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_info');
    }
};
