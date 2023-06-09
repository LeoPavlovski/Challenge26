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
        Schema::create('match_player', function (Blueprint $table) {
         $table->unsignedBigInteger('player_id');
         $table->foreign('player_id')->references('id')->on('players');
         $table->unsignedBigInteger('match_id');
         $table->foreign('match_id')->references('id')->on('matches');
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_player');
    }
};
