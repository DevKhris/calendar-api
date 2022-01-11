<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('external_id')->nullable();
            $table->integer('external_budget_id')->nullable();
            $table->integer('external_route_id')->nullable();
            $table->integer('track_id')->nullable();
            $table->string('name')->nullable();;
            $table->text('notes')->nullable();
            $table->dateTime("timestamp",0)->nullable();
            $table->text('arrival_address');
            $table->dateTime("arrival_timestamp",0)->nullable();
            $table->text('departure_address');
            $table->dateTime("departure_timestamp",0)->nullable();
            $table->integer('capacity')->default(0);
            $table->integer('confirmed_pax_count')->default(0);
            $table->dateTime("reported_departure_timestamp",0)->nullable();
            $table->string('reported_departure_kms')->nullable();
            $table->dateTime("reported_arrival_timestamp",0)->nullable();
            $table->string('reported_arrival_kms')->nullable();
            $table->string("reported_vehicle_plate_number")->nullable();
            $table->integer('status')->default(0);
            $table->json('status_info')->nullable();
            $table->integer('reprocess_status')->default(0);
            $table->integer('return')->default(0);
            $table->dateTime('created',0);
            $table->dateTime('modified',0)->nullable();
            $table->text('synchronized_downstream')->nullable();
            $table->text('synchronized_upstream')->nullable();
            $table->integer('province_id')->default(0);
            $table->integer('sale_tickets_drivers')->default(0);
            $table->text('notes_drivers')->nullable();
            $table->text('itinerary_drivers')->nullable();
            $table->double('cost_if_externalized')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
