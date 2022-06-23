<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Itemdetection;

class ItemdetectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Itemdetection::truncate();

        // Seed detected items using csv file
        $csvFile = fopen(base_path('public/data/itemdetection.csv'), 'r');

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Itemdetection::create([
                    "station" => $data['0'],
                    "s" => $data['1']
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);

    }
}
