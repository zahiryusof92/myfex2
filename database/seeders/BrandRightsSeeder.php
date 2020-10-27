<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BrandRights;

class BrandRightsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        BrandRights::factory()->create([
            'brand_id' => 1,
            'company_id' => 4,
            'franchise_type_id' => 1,
            'myipo_ref_no' => 'MYIPO-001',
            'start_date' => '2020-10-01',
            'end_date' => '2030-10-01',
            'consultant_id' => 0,
            'status' => BrandRights::DRAF
        ]);
        
        BrandRights::factory()->create([
            'brand_id' => 2,
            'company_id' => 9,
            'franchise_type_id' => 1,
            'start_date' => '2020-10-10',
            'end_date' => '2030-10-10',
            'consultant_id' => 6,
            'status' => BrandRights::DILULUS
        ]);
    }

}
