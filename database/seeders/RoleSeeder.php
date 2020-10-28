<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Role::create(['name' => 'Pengguna Perniagaan Francais']); // 1
        Role::create(['name' => 'Pengguna Konsultan Francais']); // 2
        Role::create(['name' => 'Pegawai Proses (Kewangan & Pemasaran)']); // 3
        Role::create(['name' => 'Pegawai Proses (Francais)']); // 4
        Role::create(['name' => 'Pegawai Proses (Dasar)']); // 5
        Role::create(['name' => 'Pegawai Proses (Utama)']); // 6
        Role::create(['name' => 'Ketua Pegawai Proses']); // 7
        Role::create(['name' => 'Pengarah']); // 8
        Role::create(['name' => 'Pendaftar']); // 9
        Role::create(['name' => 'Super Admin']); // 10
    }

}
