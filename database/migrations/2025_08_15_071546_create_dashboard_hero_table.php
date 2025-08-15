<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardHeroTable extends Migration
{
    public function up()
    {
        Schema::create('dashboard_hero', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->nullable();
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('primary_cta_text')->nullable();
            $table->string('primary_cta_link')->nullable();
            $table->string('secondary_cta_text')->nullable();
            $table->string('secondary_cta_link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dashboard_hero');
    }
}