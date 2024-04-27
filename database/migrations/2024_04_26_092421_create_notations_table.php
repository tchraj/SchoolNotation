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
        Schema::create('notations', function (Blueprint $table) {
            $table->id();
            $table->integer('qualite_ens');
            $table->integer('infra');
            $table->integer('diversite_inclusion');
            $table->integer('recherche_innov');
            $table->integer('insert_prof');
            // $table->foreign('user_id')->references('users')->on('id');
            // $table->foreign('university_id')->references('universities')->on('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notations');
    }
};
