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
        Schema::create('elozmenies', function (Blueprint $table) {
            $table->id();
            $table->string('hely');
            $table->enum('statusz',['Nem található csomag', 'A csomag bekerült a rendszerbe, de még nem adták fel', 
            'Sikeresen kiszállítva'])
            ->default('Nem található csomag');
            $table->date('modositasdatum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elozmenies');
    }
};
