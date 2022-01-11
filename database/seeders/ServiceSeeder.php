<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ServiceSeeder extends Seeder
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
        $json = File::get('./database/hydratations/services.json');
        // Transform json to associative array
        $data = json_decode($json, true);

        // Create model from each item on array
        foreach ($data['services'] as $item) {
            $result = new Service($item);
            $result->save();
        }

        return true;
    }
}
