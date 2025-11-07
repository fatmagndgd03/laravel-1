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
        Schema::table('uyeler', function (Blueprint $table) {
            $table->tinyInteger('yetki')->default(0)->after('parola');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('uyeler', function (Blueprint $table) {
            $table->dropColumn('yetki');
        });
    }
};
