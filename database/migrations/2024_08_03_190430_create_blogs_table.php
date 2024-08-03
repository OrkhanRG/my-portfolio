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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('creator_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('main_image');
            $table->tinyText('short_description')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->nullable()->default(0);
            $table->string('expire_date')->nullable();
            $table->date('publish_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
