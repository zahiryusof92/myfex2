<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Company::factory()->create([
            'consultant' => false,
            'status' => 0
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => 1
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => 2
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => 3
        ]);

        Company::factory()->create([
            'consultant' => true,
            'status' => 0
        ]);

        Company::factory()->create([
            'consultant' => true,
            'status' => 0
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => 1,
            'consultant_id' => 6
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => 2,
            'consultant_id' => 6
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => 3,
            'consultant_id' => 6
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => 4,
            'consultant_id' => 6
        ]);
    }

}
