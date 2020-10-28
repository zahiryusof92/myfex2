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
        // 1
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DRAF
        ]);
        
        // 2
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::BARU
        ]);

        // 3
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DINILAI
        ]);

        // 4
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DILULUS
        ]);

        // 5
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DRAF
        ]);

        // 6
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DRAFT
        ]);

        // 7
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DITOLAK
        ]);

        // 8
        Company::factory()->create([
            'consultant' => true,
            'status' => Company::DILULUS
        ]);
        
        // 9
        Company::factory()->create([
            'consultant' => true,
            'status' => Company::DITOLAK
        ]);
                
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DRAF,
            'consultant_id' => 8
        ]);
        
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::BARU,
            'consultant_id' => 8
        ]);
        
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DINILAI,
            'consultant_id' => 8
        ]);
        
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DILULUS,
            'consultant_id' => 8
        ]);
        
        Company::factory()->create([
            'consultant' => false,
            'status' => Company::DITOLAK,
            'consultant_id' => 8
        ]);
    }

}
