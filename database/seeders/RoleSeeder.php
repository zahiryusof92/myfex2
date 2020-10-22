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
        Role::create(['name' => 'Pengguna Perniagaan Francais']);
        Role::create(['name' => 'Pengguna Konsultan Francais']);
        Role::create(['name' => 'Pegawai Proses (Kewangan & Pemasaran)']);
        Role::create(['name' => 'Pegawai Proses (Francais)']);
        Role::create(['name' => 'Pegawai Proses (Utama)']);
        Role::create(['name' => 'Ketua Pegawai Proses']);
        Role::create(['name' => 'Pengarah']);
        Role::create(['name' => 'Pendaftar']);
        Role::create(['name' => 'Super Admin']);
    }

}
