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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('label')->default('Mahasiswa Sistem Informasi');
            $table->string('name');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->string('stat_project')->default('3+');
            $table->string('stat_major')->default('SI');
            $table->string('stat_university')->default('Esa Unggul');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
