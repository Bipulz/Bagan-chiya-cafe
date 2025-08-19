<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('testimonials', function (Blueprint $table) {
        $table->id();
        $table->string('section_title')->nullable(); // Section title (e.g. "What Our Customers Say")
        $table->text('text');                        // Testimonial text
        $table->float('rating')->default(5);         // Rating (e.g. 4.5)
        $table->string('author');                    // Author name
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
