<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('furkan_yedeks', function (Blueprint $table) {
            $table->id();
            $table->string('isim');
            $table->string('soyisim');
            $table->string('email')->unique();
            $table->string('telefon')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('furkan_yedeks');
    }
};
