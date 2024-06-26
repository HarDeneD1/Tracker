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
        Schema::create('csomags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kovetes_id')->constrained('elozmeny')->cascadeOnDelete();
            $table->foreignId('felado_id')->constrained('vevo')->cascadeOnDelete();
            $table->foreignId('cimzett_id')->constrained('vevo')->cascadeOnDelete();
            $table->foreignId('szallito_id')->constrained('szallito')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csomags');
    }
};
