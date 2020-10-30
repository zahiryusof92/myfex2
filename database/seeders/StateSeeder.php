<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('states')->delete();

        $states = [
            ['name' => 'JOHOR', 'name_long' => 'JOHOR DARUL TAKZIM', 'code2' => 'JH', 'code3' => 'JOH', 'capital' => 'JOHOR BAHRU', 'country_id' => 129],
            ['name' => 'KEDAH', 'name_long' => 'KEDAH DARUL AMAN', 'code2' => 'KD', 'code3' => 'KED', 'capital' => 'ALOR SETAR', 'country_id' => 129],
            ['name' => 'KELANTAN', 'name_long' => 'KELANTAN DARUL NAIM', 'code2' => 'KT', 'code3' => 'KEL', 'capital' => 'KOTA BAHRU', 'country_id' => 129],
            ['name' => 'MELAKA', 'name_long' => 'MELAKA BANDARAYA BERSEJARAH', 'code2' => 'ML', 'code3' => 'MLK', 'capital' => 'BANDAR MELAKA', 'country_id' => 129],
            ['name' => 'NEGERI SEMBILAN', 'name_long' => ' NEGERI SEMBILAN DARUL KHUSUS', 'code2' => 'NS', 'code3' => 'NSN', 'capital' => 'SEREMBAN', 'country_id' => 129],
            ['name' => 'PAHANG', 'name_long' => 'PAHANG DARUL MAKMUR', 'code2' => 'PH', 'code3' => 'PAH', 'capital' => 'KUANTAN', 'country_id' => 129],
            ['name' => 'PULAU PINANG', 'name_long' => 'PULAU PINANG PULAU MUTIARA', 'code2' => 'PN', 'code3' => 'PEN', 'capital' => 'GEORGE TOWN', 'country_id' => 129],
            ['name' => 'PERAK', 'name_long' => 'PERAK DARUL RIDZUAN', 'code2' => 'PR', 'code3' => 'PRK', 'capital' => 'IPOH', 'country_id' => 129],
            ['name' => 'PERLIS', 'name_long' => 'PERLIS INDERA KAYANGAN', 'code2' => 'PL', 'code3' => 'PER', 'capital' => 'KANGAR', 'country_id' => 129],
            ['name' => 'SELANGOR', 'name_long' => 'SELANGOR DARUL EHSAN', 'code2' => 'SG', 'code3' => 'SEL', 'capital' => 'SHAH ALAM', 'country_id' => 129],
            ['name' => 'TERENGGANU', 'name_long' => 'TERENGGANU DARUL IMAN', 'code2' => 'TR', 'code3' => 'TER', 'capital' => 'KUALA TERENGGANU', 'country_id' => 129],
            ['name' => 'SABAH', 'name_long' => 'SABAH NEGERI DI BAWAH BAYU', 'code2' => 'SB', 'code3' => 'SBH', 'capital' => 'KOTA KINABALU', 'country_id' => 129],
            ['name' => 'SARAWAK', 'name_long' => 'SARAWAK BUMI KENYALANG', 'code2' => 'SR', 'code3' => 'SWK', 'capital' => 'KUCHING', 'country_id' => 129],
            ['name' => 'WP KUALA LUMPUR', 'name_long' => 'WILAYAH PERSEKUTUAN KUALA LUMPUR', 'code2' => 'KL', 'code3' => 'KUL', 'capital' => 'KUALA LUMPUR', 'country_id' => 129],
            ['name' => 'WP LABUAN', 'name_long' => 'WILAYAH PERSEKUTUAN LABUAN', 'code2' => 'LB', 'code3' => 'LBU', 'capital' => 'LABUAN', 'country_id' => 129],
            ['name' => 'WP PUTRAJAYA', 'name_long' => 'WILAYAH PERSEKUTUAN PUTRAJAYA', 'code2' => 'PJ', 'code3' => 'PTJ', 'capital' => 'PUTRAJAYA', 'country_id' => 129]
        ];

        DB::table('states')->insert($states);
    }

}
