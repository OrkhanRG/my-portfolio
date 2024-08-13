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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('blog_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->text('comment');
            $table->string('ip')->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('is_approved')->default(0);
            $table->integer('like_count')->default(0);

            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('parent_id')->on('comments')->references('id')->onDelete('cascade');
            $table->foreign('blog_id')->on('blogs')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
