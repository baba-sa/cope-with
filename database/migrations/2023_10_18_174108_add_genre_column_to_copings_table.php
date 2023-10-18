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
        Schema::table('copings', function (Blueprint $table) {
            //
            $table->foreignId('genre_id')->constrained('action_genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('copings', function (Blueprint $table) {
            //
            $table->dropForeign('genre_id');
        });
    }
};