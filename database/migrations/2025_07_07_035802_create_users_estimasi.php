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
        Schema::create('estimasi', function (Blueprint $table) {
            $table->id('id_estimasi');
            $table->unsignedBigInteger('id_warehouse');
            $table->unsignedBigInteger('id_kota_tujuan');
            $table->integer('estimasi_hari');
            $table->foreign('id_warehouse')->references('id_warehouse')->on('warehouse')->onDelete('cascade');
            $table->foreign('id_kota_tujuan')->references('id_kota')->on('kota')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estimasi');
    }
};
