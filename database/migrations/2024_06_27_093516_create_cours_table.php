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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('nom',70);
            $table->string('professeur',70);
            $table->timestamps();
            $table->string('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
