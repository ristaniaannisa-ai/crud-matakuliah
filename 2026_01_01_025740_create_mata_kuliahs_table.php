<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void 
    {
        // Nama tabel harus 'matakuliahs' agar sinkron dengan model
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id(); // Primary Key auto-increment
            $table->string('kode_mk', 10)->unique(); 
            $table->string('nama_mk', 255); 
            $table->integer('sks'); 
            $table->integer('semester'); 
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
};