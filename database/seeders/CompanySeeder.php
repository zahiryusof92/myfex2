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
            'status' => Company::DRAF
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => Company::BARU
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DINILAI
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DILULUS
        ]);

        Company::factory()->create([
            'consultant' => true,
            'status' => Company::DRAF
        ]);

        Company::factory()->create([
            'consultant' => true,
            'status' => Company::DRAF
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => Company::BARU,
            'consultant_id' => 6
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DINILAI,
            'consultant_id' => 6
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DILULUS,
            'consultant_id' => 6
        ]);

        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DITOLAK,
            'consultant_id' => 6
        ]);
    }

}
