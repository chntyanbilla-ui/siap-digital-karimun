<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('opd', function (Blueprint $table) {

            $table->id();

            $table->string('kode_opd');

            $table->string('nama_opd');

            $table->string('kepala_opd');

            $table->string('email');

            $table->string('telepon');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('opd');
    }
};