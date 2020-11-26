<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('gender')->nullable();
            $table->string('category')->nullable();
            $table->string('nationality')->nullable();
            $table->string('dob')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('mobile')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('c_address')->nullable();
            $table->string('p_address')->nullable();
            $table->string('year10')->nullable();
            $table->string('subject10')->nullable();
            $table->string('grade10')->nullable();
            $table->string('school10')->nullable();
            $table->string('board10')->nullable();
            $table->string('year12')->nullable();
            $table->string('subject12')->nullable();
            $table->string('grade12')->nullable();
            $table->string('school12')->nullable();
            $table->string('board12')->nullable();
            $table->string('email')->unique();
            $table->string('otp')->nullable();
            $table->string('verified')->default('0');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
