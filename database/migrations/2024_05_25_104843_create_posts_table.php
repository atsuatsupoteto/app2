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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->references('id')
            ->on('users');
            $table->text('title');
            $table->timestamp('event_datetime')->nullable();
            $table->text('venue')->nullable();
            $table->text('event_url')->nullable();
            $table->text('content')->nullable();
            $table->boolean('delete_flg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
