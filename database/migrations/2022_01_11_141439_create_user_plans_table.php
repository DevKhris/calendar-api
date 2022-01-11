<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('currency_id')->unsigned()->default(1);
            $table->integer('next_user_plan_id')->unsigned()->nullable();
            $table->dateTime('start_timestamp')->nullable();
            $table->dateTime('end_timestamp')->nullable();
            $table->dateTime('renewal_timestamp')->nullable();
            $table->double('renewal_price');
            $table->integer('requires_invoice')->unsigned()->default(0);
            $table->integer('status')->unsigned()->default(0);
            $table->dateTime('created',0);
            $table->dateTime('modified',0)->nullable();
            $table->integer('financiation')->default(0);
            $table->integer('status_financiation')->default(0);
            $table->string('language')->default("ca_ES");
            $table->string('nif')->nullable();
            $table->string('business_name')->nullable();
            $table->integer('pending_payment')->unsigned()->default(0);
            $table->date('date_max_payment',0)->nullable();
            $table->dateTime('proxim_start_timestamp',0)->nullable();
            $table->dateTime('proxim_end_timestamp',0)->nullable();
            $table->dateTime('proxim_renewal_timestamp',0)->nullable();
            $table->double('proxim_renewal_price')->nullable();
            $table->double('credits_return')->nullable();
            $table->integer('company_id')->unsigned()->default(0);
            $table->integer('cancel_employee')->unsigned()->default(0);
            $table->integer('force_renovation')->unsigned()->default(0);
            $table->dateTime('date_canceled',0)->nullable();
            $table->double('amount_confirm_canceled')->nullable();
            $table->double('credit_confirm_canceled')->nullable();
            $table->integer('cost_center_id')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_plans');
    }
}
