<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostGraduationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_graduation_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('subject',200);
            $table->string('grade');
            $table->year('year');
            $table->string('institute');
            $table->string('state');
            $table->string('country');
            $table->string('key');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_graduation_details');
    }
}
