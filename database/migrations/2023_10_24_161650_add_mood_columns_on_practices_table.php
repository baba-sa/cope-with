<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('practices', function (Blueprint $table) {
            //
            $table->foreignId('mood_id_before')
            ->nullable()
            ->constrained(table: 'moods');
            $table->foreignId('mood_id_after')
            ->nullable()
            ->constrained(table: 'moods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('practices', function (Blueprint $table) {
            //
            $table->dropForeign('mood_id_before');
            $table->dropForeign('mood_id_after');
        });
    }
};
