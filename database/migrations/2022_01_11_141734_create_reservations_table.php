<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_plan_id')->references('id')->on('user_plans');
            $table->integer('route_id')->references('id')->on('routes');
            $table->integer('track_id')->nullable();
            $table->dateTime('reservation_start')->nullable();
            $table->dateTime('reservation_end')->nullable();
            $table->integer('route_stop_origin_id')->nullable();
            $table->integer('route_stop_destination_id')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('reservations');
    }
}
