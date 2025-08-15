<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('hero_badge')->nullable();
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('journey_title')->nullable();
            $table->text('journey_intro')->nullable();
            $table->string('mission_title')->nullable();
            $table->text('mission_text')->nullable();
            $table->string('values_title')->nullable();
            $table->string('team_title')->nullable();
            $table->text('team_intro')->nullable();
            $table->string('cta_title')->nullable();
            $table->text('cta_intro')->nullable();
            $table->string('cta_link')->nullable();
            $table->string('cta_button')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};