<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Brand::factory()->create([
            'name' => 'Brand_1',
            'company' => 'Brand Company 1',
            'country_id' => 226
        ]);

        Brand::factory()->create([
            'name' => 'Brand_2',
            'company' => 'Brand Company 2',
            'country_id' => 232
        ]);
    }

}
