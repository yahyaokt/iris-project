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
        Schema::create('driver', function (Blueprint $table) {
            $table->id('id_driver');
            $table->string('username', 50)->unique();
            $table->string('nama_driver');
            $table->integer('quantity');
            $table->string('status');
            $table->unsignedBigInteger('id_warehouse');
            $table->string('password', 255);
            $table->foreign('id_warehouse')->references('id_warehouse')->on('warehouse')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver');
    }
};
