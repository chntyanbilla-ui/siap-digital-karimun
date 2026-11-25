<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('opd', function (Blueprint $table) {

            if (!Schema::hasColumn('opd', 'kode_opd')) {
                $table->string('kode_opd')->nullable();
            }

            if (!Schema::hasColumn('opd', 'nama_opd')) {
                $table->string('nama_opd')->nullable();
            }

            if (!Schema::hasColumn('opd', 'kepala_opd')) {
                $table->string('kepala_opd')->nullable();
            }

            if (!Schema::hasColumn('opd', 'email')) {
                $table->string('email')->nullable();
            }

            if (!Schema::hasColumn('opd', 'telepon')) {
                $table->string('telepon')->nullable();
            }

        });
    }

    public function down(): void
    {
        Schema::table('opd', function (Blueprint $table) {

            $columns = [
                'kode_opd',
                'nama_opd',
                'kepala_opd',
                'email',
                'telepon',
            ];

            foreach ($columns as $column) {

                if (Schema::hasColumn('opd', $column)) {
                    $table->dropColumn($column);
                }

            }

        });
    }
};