<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->string('Rank')->unique();
            $table->string('Title');
            $table->string('ISSN');
            $table->string('Publisher');
            $table->string('UGC_listed');
            $table->string('Impact_Factor');
            $table->string('No_of_coauthors');
            $table->string('Are_you_main_author');
            $table->string('Score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
