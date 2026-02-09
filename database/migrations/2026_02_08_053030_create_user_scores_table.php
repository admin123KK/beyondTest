<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_scores', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // User's name
            $table->integer('score');  // e.g., 7 out of 10
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_scores');
    }
};