<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\CalendarSeeder;
use Database\Seeders\RouteDataSeeder;
use Database\Seeders\UserPlanSeeder;
use Database\Seeders\ReservationSeeder;

class JsonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DayDisabledSeeder::hydrate();
        CalendarSeeder::hydrate();
        ReservationSeeder::hydrate();
        RouteSeeder::hydrate();
        RouteDataSeeder::hydrate();
        ServiceSeeder::hydrate();
        UserSeeder::hydrate();
        UserPlanSeeder::hydrate();

        return "Succesfully hydratate all data to database";
    }
}
