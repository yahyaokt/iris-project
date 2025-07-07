<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('id_customer');
            $table->string('username', 50)->unique();
            $table->string('nama_customer');
            $table->string('alamat');
            $table->string('nama_kota');
            $table->string('nomor_telepon');
            $table->unsignedBigInteger('id_kota');
            $table->string('password', 255);
            $table->foreign('id_kota')->references('id_kota')->on('kota')->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};