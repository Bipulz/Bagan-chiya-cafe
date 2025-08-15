<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


public function up()
{
    Schema::table('abouts', function (Blueprint $table) {
        if (!Schema::hasColumn('abouts', 'about_title')) {
            $table->string('about_title')->nullable();
        }
        if (!Schema::hasColumn('abouts', 'paragraph1')) {
            $table->text('paragraph1')->nullable();
        }
        if (!Schema::hasColumn('abouts', 'paragraph2')) {
            $table->text('paragraph2')->nullable();
        }
    });
}

    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn(['about_title', 'paragraph1', 'paragraph2']);
        });
    }
};
