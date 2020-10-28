<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // 1
        User::factory()->create([
            'username' => '20201070011',
            'name' => 'Pengguna Perniagaan 1',
            'email' => 'user1@myfex.com',
            'role_id' => 1,
            'company_id' => 1,
            'staff' => false,
            'status' => User::DILULUS
        ]);

        // 2
        User::factory()->create([
            'username' => '20201070012',
            'name' => 'Pengguna Perniagaan 2',
            'email' => 'user2@myfex.com',
            'role_id' => 1,
            'company_id' => 2,
            'staff' => false,
            'status' => User::DILULUS
        ]);

        // 3
        User::factory()->create([
            'username' => '20201070013',
            'name' => 'Pengguna Perniagaan 3',
            'email' => 'user3@myfex.com',
            'role_id' => 1,
            'company_id' => 3,
            'staff' => false,
            'status' => User::DILULUS
        ]);

        // 4 
        User::factory()->create([
            'username' => '20201070014',
            'name' => 'Pengguna Perniagaan 4',
            'email' => 'user4@myfex.com',
            'role_id' => 1,
            'company_id' => 4,
            'staff' => false,
            'status' => User::DILULUS
        ]);

        // 5
        User::factory()->create([
            'username' => '20201070015',
            'name' => 'Pengguna Perniagaan 5',
            'email' => 'user5@myfex.com',
            'role_id' => 1,
            'company_id' => 5,
            'staff' => false,
            'status' => User::BARU
        ]);

        // 6
        User::factory()->create([
            'username' => '20201070016',
            'name' => 'Pengguna Perniagaan 6',
            'email' => 'user6@myfex.com',
            'role_id' => 1,
            'company_id' => 6,
            'staff' => false,
            'status' => User::DINILAI
        ]);

        // 7
        User::factory()->create([
            'username' => '20201070017',
            'name' => 'Pengguna Perniagaan 7',
            'email' => 'user7@myfex.com',
            'role_id' => 1,
            'company_id' => 7,
            'staff' => false,
            'status' => User::DITOLAK
        ]);

        // 8
        User::factory()->create([
            'username' => '20201070018',
            'name' => 'Pengguna Konsultan 1',
            'email' => 'konsultan1@myfex.com',
            'role_id' => 2,
            'company_id' => 8,
            'staff' => false,
            'status' => User::DILULUS
        ]);

        // 9
        User::factory()->create([
            'username' => '20201070019',
            'name' => 'Pengguna Konsultan 2',
            'email' => 'konsultan2@myfex.com',
            'role_id' => 2,
            'company_id' => 9,
            'staff' => false,
            'status' => User::DITOLAK
        ]);
        
        User::factory()->create([
            'username' => 'akauntan',
            'name' => 'Pegawai Proses (Kewangan & Pemasaran)',
            'email' => 'akauntan@myfex.com',
            'role_id' => 3,
            'staff' => true,
            'status' => User::DITOLAK
        ]);
        
        User::factory()->create([
            'username' => 'ppf',
            'name' => 'Pegawai Proses (Francais)',
            'email' => 'ppf@myfex.com',
            'role_id' => 4,
            'staff' => true,
            'status' => User::DILULUS
        ]);

        User::factory()->create([
            'username' => 'dasar',
            'name' => 'Pegawai Proses (Dasar)',
            'email' => 'dasar@myfex.com',
            'role_id' => 5,
            'staff' => true,
            'status' => User::DILULUS
        ]);

        User::factory()->create([
            'username' => 'ppu',
            'name' => 'Pegawai Proses (Utama)',
            'email' => 'ppu@myfex.com',
            'role_id' => 6,
            'staff' => true,
            'status' => User::DILULUS
        ]);

        User::factory()->create([
            'username' => 'kpp',
            'name' => 'Ketua Pegawai Proses',
            'email' => 'kpp@myfex.com',
            'role_id' => 7,
            'staff' => true,
            'status' => User::DILULUS
        ]);

        User::factory()->create([
            'username' => 'pengarah',
            'name' => 'Pengarah',
            'email' => 'pengarah@myfex.com',
            'role_id' => 8,
            'staff' => true,
            'status' => User::DILULUS
        ]);

        User::factory()->create([
            'username' => 'pendaftar',
            'name' => 'Pendaftar',
            'email' => 'pendaftar@myfex.com',
            'role_id' => 9,
            'staff' => true,
            'status' => User::DILULUS
        ]);

        User::factory()->create([
            'username' => 'superadmin',
            'name' => 'Super Admin',
            'email' => 'superadmin@myfex.com',
            'role_id' => 10,
            'staff' => true,
            'status' => User::DILULUS
        ]);
    }

}
