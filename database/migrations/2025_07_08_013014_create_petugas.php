<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id('id_petugas');
            $table->string('username',50)->unique();
            $table->string('nama_petugas');
            $table->unsignedBigInteger('id_warehouse');
            $table->string('password', 255);
            $table->foreign('id_warehouse')->references('id_warehouse')->on('warehouse')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
