<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
{
    Schema::table('dashboards', function (Blueprint $table) {
        $table->string('stat_icon')->nullable();
    });
}

public function down(): void
{
    Schema::table('dashboards', function (Blueprint $table) {
        $table->dropColumn('stat_icon');
    });
}
};
