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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('orders');
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->enum('type', ['Food', 'Other']);
            $table->string('description');
            $table->timestamps();
            $table->foreign('room_id')->references('id')->on('room');
            $table->foreign('user_id')->references('id')->on('users');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('orders');
    }
};
