<?php

namespace Database\Seeders;

use App\Models\Calendar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }

    /**
     * Hydrate json data to database records
     *
     * @author Khris <contact@devkhris.com>
     * @return void
     */
    public static function hydrate()
    {
        // Get json content from file
        $json = File::get('./database/hydratations/calendar.json');
        // Transform json to associative array
        $data = json_decode($json, true);

        // Create model from each item on array
        foreach ($data['calendar '] as $item) {
            $result = new Calendar($item);
            $result->save();
        }

        return true;
    }
}
