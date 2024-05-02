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
            $table->unsignedBigInteger('criteria_id')->after('score');
            $table->foreign('criteria_id')->references('id')
                ->on('criterias');
            $table->removeColumn('qualite_ens');
            $table->removeColumn('infra');
            $table->removeColumn('diversite_inclusion');
            $table->removeColumn('recherche_innov');
            $table->removeColumn('insert_prof');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notations', function (Blueprint $table) {
            $table->removeColumn('criteria_id');
            $table->foreign('criteria_id')->references('id')
                ->on('criterias');
            $table->removeColumn('qualite_ens');
            $table->removeColumn('infra');
            $table->removeColumn('diversite_inclusion');
            $table->removeColumn('recherche_innov');
            $table->removeColumn('insert_prof');
        });
    }
};
