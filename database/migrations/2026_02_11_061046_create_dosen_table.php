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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nidn')->unique();
            $table->string('nuptk')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('link_scholar')->nullable();
            $table->string('link_sinta')->nullable();
            $table->string('pendidikan_s1');
            $table->string('pendidikan_s2');
            $table->string('pendidikan_s3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
