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
        Schema::create('special_offers', function (Blueprint $table) {
            $table->id();
            $table->string('section_title')->nullable(); // Editable section heading
            $table->string('title');                     // Offer item title
            $table->text('description')->nullable();     // Offer item description
            $table->integer('price');                    // Offer price
            $table->integer('original_price')->nullable();
            $table->string('discount_code')->nullable();
            $table->integer('discount_percentage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_offers');
    }
};