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
        User::factory()->create([
            'username' => 'user1',
            'name' => 'Pengguna Perniagaan 1',
            'email' => 'user1@myfex.com',
            'role_id' => 1,
            'company_id' => 1,
            'staff' => false,
            'status' => User::BARU
        ]);

        User::factory()->create([
            'username' => 'user2',
            'name' => 'Pengguna Perniagaan 2',
            'email' => 'user2@myfex.com',
            'role_id' => 1,
            'company_id' => 2,
            'staff' => false,
            'status' => User::TELAH_DINILAI
        ]);

        User::factory()->create([
            'username' => 'user3',
            'name' => 'Pengguna Perniagaan 3',
            'email' => 'user3@myfex.com',
            'role_id' => 1,
            'company_id' => 3,
            'staff' => false,
            'status' => User::DILULUSKAN
        ]);

        User::factory()->create([
            'username' => 'user4',
            'name' => 'Pengguna Perniagaan 4',
            'email' => 'user4@myfex.com',
            'role_id' => 1,
            'company_id' => 4,
            'staff' => false,
            'status' => 4
        ]);

        User::factory()->create([
            'username' => 'konsultan1',
            'name' => 'Pengguna Konsultan 1',
            'email' => 'konsultan1@myfex.com',
            'role_id' => 2,
            'company_id' => 5,
            'staff' => false,
            'status' => User::DITOLAK
        ]);

        User::factory()->create([
            'username' => 'konsultan3',
            'name' => 'Pengguna Konsultan 3',
            'email' => 'konsultan3@myfex.com',
            'role_id' => 2,
            'company_id' => 6,
            'staff' => false,
            'status' => User::DILULUSKAN
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
            'status' => User::DILULUSKAN
        ]);

        User::factory()->create([
            'username' => 'ppu',
            'name' => 'Pegawai Proses (Utama)',
            'email' => 'ppu@myfex.com',
            'role_id' => 5,
            'staff' => true,
            'status' => User::DILULUSKAN
        ]);

        User::factory()->create([
            'username' => 'kpp',
            'name' => 'Ketua Pegawai Proses',
            'email' => 'kpp@myfex.com',
            'role_id' => 6,
            'staff' => true,
            'status' => User::DILULUSKAN
        ]);

        User::factory()->create([
            'username' => 'pengarah',
            'name' => 'Pengarah',
            'email' => 'pengarah@myfex.com',
            'role_id' => 7,
            'staff' => true,
            'status' => User::DILULUSKAN
        ]);

        User::factory()->create([
            'username' => 'pendaftar',
            'name' => 'Pendaftar',
            'email' => 'pendaftar@myfex.com',
            'role_id' => 8,
            'staff' => true,
            'status' => User::DILULUSKAN
        ]);

        User::factory()->create([
            'username' => 'superadmin',
            'name' => 'Super Admin',
            'email' => 'superadmin@myfex.com',
            'role_id' => 9,
            'staff' => true,
            'status' => User::DILULUSKAN
        ]);
    }

}
