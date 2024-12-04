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
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->string('photo_url', 120);
            $table->string('Title', 120);
            $table->string('Description', 120);
            $table->string('Location', 120);
            $table->string('Tingkat-Kesulitan', 120);
            $table->string('Status', 120);
<<<<<<< HEAD
            $table->foreignId('users_id')->nullable()->constrained(); // Make it nullable
=======
            $table->foreignId('users_id')->nullable(); // Make it nullable
>>>>>>> c2ad08c09b66ef74e9db96ce30dbd4b32fa7144a
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datas');
    }
};
