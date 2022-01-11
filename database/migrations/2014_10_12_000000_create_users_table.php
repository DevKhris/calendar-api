<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('picture')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->dateTime('email_verified_at')->nullable();
            $table->dateTime('last_online')->nullable();
            $table->string('verification_code')->nullable();
            $table->string('new_email')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->integer('first')->unsigned()->default(1);
            $table->dateTime('last_accept_date')->nullable();
            $table->datetime('created')->nullable();
            $table->datetime('modified')->nullable();
            $table->string('company_contact')->nullable();
            $table->float('credits')->default(0.0)->nullable();
            $table->integer('first_trip')->unsigned()->default(1);
            $table->integer('incomplete_profile')->unsigned()->default(0);
            $table->integer('phone_verify')->unsigned()->default(0);
            $table->string('token_auto_login')->nullable();
            $table->string('user_vertical')->nullable();
            $table->integer('language_id')->unsigned()->default(1)->nullable();
            $table->integer('no_registered')->unsigned()->default(0);
            $table->softDeletes();
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
