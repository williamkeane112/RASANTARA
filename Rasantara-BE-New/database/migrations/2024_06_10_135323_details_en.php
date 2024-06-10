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
        Schema::create('detailsEN', function (Blueprint $table) {
            $table->id();
            $table->foreignId('makanan_id')->constrained('makanansEN');
            $table->text('tutorial');
            $table->text('latarBelakang');
            $table->json('bahanBahan');
            $table->json('langkahLangkah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailsEN');
    }
};
