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
        Schema::create('theses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('nim')->unique();
            $table->text('title');
            $table->string('year');
            $table->string('adviser1')->nullable();
            $table->string('adviser2')->nullable();
            $table->string('adviser3')->nullable();
            $table->string('adviser4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theses');
    }
};
