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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('team');
            $table->string('position');
            $table->integer('price');
            $table->integer('gameweek_points');
            $table->integer('total_points');
            $table->integer('points_per_match');
            $table->integer('bonus');
            $table->integer('total_bonus');
            $table->integer('games_started');
            $table->integer('goals_scored');
            $table->integer('total_goals_scored');
            $table->integer('assists');
            $table->integer('total_assists');
            $table->integer('clean_sheets');
            $table->integer('total_clean_sheets');
            $table->integer('goals_conceeded');
            $table->integer('total_goals_conceeded');
            $table->integer('own_goals');
            $table->integer('total_own_goals');
            $table->integer('penalties_saved');
            $table->integer('total_penalties_saved');
            $table->integer('penalties_missed');
            $table->integer('total_penalties_missed');
            $table->integer('yellow_cards');
            $table->integer('total_yellow_cards');
            $table->integer('red_cards');
            $table->integer('total_red_cards');
            $table->integer('saves');
            $table->integer('total_saves');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
