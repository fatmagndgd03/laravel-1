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
        // Yapılmasını istediğim işlemler buraya

        Schema::create('uyeler', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('soyad');
            $table->string('e_posta')->unique();
            $table->string('parola');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Bir şeyler ters giderse geri alınmayı sağlayacak kodlar buraya
        Schema::dropIfExists('uyeler');
    }
};
