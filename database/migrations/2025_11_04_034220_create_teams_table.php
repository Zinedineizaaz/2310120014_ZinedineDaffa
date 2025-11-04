<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id(); // Field ID
            $table->string('nim', 15)->unique(); // Nomor Induk Mahasiswa (harus unik)
            $table->string('full_name', 150); // Nama Lengkap
            $table->string('role')->nullable(); // Peran dalam tim
            $table->timestamps();
        });
    }

    /**
     * Rollback (Method Down)
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};