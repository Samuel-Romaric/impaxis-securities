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
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('projet_chef')->nullable();
            $table->string('slug')->unique();
            $table->string('projet_title');
            $table->string('amount')->nullable();
            $table->string('devise')->nullable();
            $table->string('periode')->nullable();
            $table->unsignedBigInteger('translate_id')->nullable();
            $table->string('lang')->default('fr');
            $table->enum('status', [
                'draft',
                'published'
            ])->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
