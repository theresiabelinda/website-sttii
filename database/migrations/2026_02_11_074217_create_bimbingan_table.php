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
        Schema::create('bimbingan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->string('nim')->unique();
            $table->text('judul_disertasi');
            $table->string('semester');
            $table->string('tahun_akademik');

            // Foreign Key yang menyambung ke tabel dosens
            $table->unsignedBigInteger('pembimbing_1_id');
            $table->unsignedBigInteger('pembimbing_2_id');

            // Set Relasi
            $table->foreign('pembimbing_1_id')->references('id')->on('dosen')->onDelete('cascade');
            $table->foreign('pembimbing_2_id')->references('id')->on('dosen')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bimbingan');
    }
};
