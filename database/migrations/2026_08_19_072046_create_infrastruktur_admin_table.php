<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('infrastruktur_admin', function (Blueprint $table) {

            $table->id();

            $table->string('nama');

            $table->text('deskripsi')->nullable();

            $table->string('lokasi')->nullable();

            $table->string('status')->default('aktif');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('infrastruktur_admin');
    }
};