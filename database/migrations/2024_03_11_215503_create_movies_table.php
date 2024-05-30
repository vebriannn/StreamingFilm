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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('admin');
            $table->enum('type_film', ['free', 'premium', 'standard']);
            $table->string('title');
            $table->string('movie');
            $table->string('casts');
            $table->string('categories');
            $table->string('thumbnail');
            $table->string('ranting');
            $table->date('release_date');
            $table->text('about');
            $table->string('duration');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
