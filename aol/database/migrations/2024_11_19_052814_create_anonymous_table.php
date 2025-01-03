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
        Schema::create('anonymous', function (Blueprint $table) {
            $table->id();
            $table->string('photo_url', 120);
            $table->string('Title', 120);
            $table->string('Description', 120);
            $table->string('Location', 120);
            $table->string('Tingkat-Kesulitan', 120);
            $table->string('Status', 120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anonymous');
    }
};
