<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('warehouse', function (Blueprint $table) {
            $table->id('id_warehouse');
            $table->string('username', 50)->unique();
            $table->string('nama_warehouse');
            $table->string('alamat');
            $table->string('nama_kota');
            $table->string('password', 255);
            $table->integer('quantity');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warehouse');
    }
};
