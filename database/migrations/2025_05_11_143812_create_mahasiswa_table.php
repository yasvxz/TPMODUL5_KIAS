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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            // TODO: Buat kolom nama(string), nim(string & unique), jurusan(string), fakultas(string) & foto_profil(string)
            $table->string(column:'nama');
            $table->string(column:'nim')->unique();
            $table->string(column:'jurusan');
            $table->string(column:'fakultas');
            $table->string(column:'foto_profil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
