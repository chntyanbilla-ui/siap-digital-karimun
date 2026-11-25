<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('layanan', function (Blueprint $table) {

            if (!Schema::hasColumn('layanan', 'kategori')) {
                $table->string('kategori')->nullable();
            }

            if (!Schema::hasColumn('layanan', 'deskripsi')) {
                $table->text('deskripsi')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('layanan', function (Blueprint $table) {

            if (Schema::hasColumn('layanan', 'kategori')) {
                $table->dropColumn('kategori');
            }

            if (Schema::hasColumn('layanan', 'deskripsi')) {
                $table->dropColumn('deskripsi');
            }
        });
    }
};