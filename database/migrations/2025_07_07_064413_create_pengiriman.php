<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id('id_pengiriman');
            $table->unsignedBigInteger('id_warehouse');
            $table->foreign('id_warehouse')->references('id_warehouse')->on('warehouse')->onDelete('cascade');
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id_customer')->on('customer')->onDelete('cascade');
            $table->unsignedBigInteger('id_estimasi');
            $table->foreign('id_estimasi')->references('id_estimasi')->on('estimasi')->onDelete('cascade');
            $table->unsignedBigInteger('id_driver');
            $table->foreign('id_driver')->references('id_driver')->on('driver')->onDelete('cascade');
            $table->integer('estimasi');
            $table->string('status');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
