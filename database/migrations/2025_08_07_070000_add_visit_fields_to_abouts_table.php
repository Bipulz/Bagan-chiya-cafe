<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('map_title')->nullable();
            $table->string('visit_title')->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->string('secondary_location')->nullable();
            $table->string('hours')->nullable();
            $table->text('map_url')->nullable();
            $table->text('directions_url')->nullable();
        });
    }

    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn([
                'map_title',
                'visit_title',
                'location',
                'phone',
                'secondary_location',
                'hours',
                'map_url',
                'directions_url'
            ]);
        });
    }
};
