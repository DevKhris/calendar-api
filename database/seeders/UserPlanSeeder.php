<?php

namespace Database\Seeders;

use App\Models\Users\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserPlanSeeder extends Seeder
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
        $json = File::get('./database/hydratations/user_plans.json');
        // Transform json to associative array
        $data = json_decode($json, true);

        // Create model from each item on array
        foreach ($data['user_plans'] as $item) {
            $result = new Plan($item);
            $result->save();
        }

        return true;
    }
}
