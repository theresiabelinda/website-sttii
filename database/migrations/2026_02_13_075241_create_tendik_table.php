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
        Schema::create('tendik', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->enum('pendidikan_terakhir', ['SMA', 'D3','S1', 'S2', 'S3']);
            $table->string('jurusan')->nullable();
            $table->enum('divisi', ['keuangan', 'WK II Bag. Kepegawaian','pusdatin', 'sarpras', 'perpustakaan','p3s','sekprodi','alumni','lppm','spmi','sekretasi lembaga']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tendik');
    }
};
