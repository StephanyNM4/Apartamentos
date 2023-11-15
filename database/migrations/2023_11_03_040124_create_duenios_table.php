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
        Schema::create('duenios', function (Blueprint $table) {
            $table->id('idDuenio')->primaryKey();
            $table->string('nombre', 25);
            $table->string('apellido', 25);
            $table->string('correo', 25)->unique();
            $table->string('teléfono', 25);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duenios');
    }
};
