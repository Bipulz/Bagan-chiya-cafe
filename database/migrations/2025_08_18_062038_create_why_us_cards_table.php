<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up():void
{
    Schema::create('why_us_cards', function (Blueprint $table) {
        $table->id();
        $table->string('heading')->nullable();      // Shared heading for all cards
        $table->string('icon')->nullable();         // Font Awesome icon class
        $table->string('title')->nullable();        // Card title
        $table->text('description')->nullable();    // Card description
        $table->timestamps();
    });
}

  
    public function down(): void
    {
        Schema::dropIfExists('why_us_cards');
    }
};
