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
        Schema::create('blog_category', function (Blueprint $table) {
            // $table->uuid('id')->primary();
            // // $table->unsignedBigInteger('blog_id');
            // // $table->unsignedBigInteger('category_id');
            // $table->timestamps();
            $table->foreignUuid('blog_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignUuid('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->primary(['blog_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_category');
    }
};
