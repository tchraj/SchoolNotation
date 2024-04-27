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
        Schema::table('notations', function (Blueprint $table) {
            $table->unsignedBigInteger('univ_id');
            $table->foreign('univ_id')->references('id')->on('universities');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notations', function (Blueprint $table) {
            //
        });
    }
};
