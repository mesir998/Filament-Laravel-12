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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('no_kendaraan', 100)->unique();
            $table->string('jenis_kendaraan', 100)->nullable();
            $table->string('merk', 100)->nullable();
            $table->string('model', 100)->nullable();
            $table->year('tahun')->nullable();
            $table->string('warna', 100)->nullable();
            $table->string('jenis_bbm', 50)->nullable();
            $table->unsignedInteger('kapasitas_penumpang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
