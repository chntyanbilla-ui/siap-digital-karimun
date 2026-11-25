<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('layanan', function (Blueprint $table) {

            $table->id();

            $table->string('nama');

            $table->string('opd');

            $table->text('deskripsi');

            $table->string('gambar')->nullable();

            $table->string('pdf')->nullable();

            $table->enum('status',['Aktif','Tidak Aktif'])->default('Aktif');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('layanan');
    }
};