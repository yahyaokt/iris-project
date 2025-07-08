<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->string('id_barang',10)->primary();
            $table->string('nama_barang');
            $table->string('deskripsi');
            $table->integer('harga');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
