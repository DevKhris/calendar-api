<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes_data', function (Blueprint $table) {
            $table->id();
            $table->integer('route_id')->references('id')->on('routes');
            $table->integer('calendar_id')->references('id')->on('calendars');
            $table->integer('vinculation_route')->nullable();
            $table->integer('route_circular')->default(0);
            $table->dateTime('date_init')->nullable();
            $table->dateTime('date_finish')->nullable();
            $table->integer('mon')->default(0);
            $table->integer('tue')->default(0);
            $table->integer('wed')->default(0);
            $table->integer('thu')->default(0);
            $table->integer('fri')->default(0);
            $table->integer('sat')->default(0);
            $table->integer('sun')->default(0);
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
        Schema::dropIfExists('routes_data');
    }
}
