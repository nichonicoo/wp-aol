<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('datas', function (Blueprint $table) {
            $table->string('Status')->default('pending');  // Default value can be set to 'pending'
        });
    }

    public function down()
    {
        Schema::table('datas', function (Blueprint $table) {
            $table->dropColumn('Status');
        });
    }

};
