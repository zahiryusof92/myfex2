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
            'username' => 'user',
            'name' => 'Pengguna Perniagaan Francais',
            'email' => 'user@myfex.com',
            'role_id' => 1
        ]);
        
        User::factory()->create([
            'username' => 'konsultan',
            'name' => 'Pengguna Konsultan Francais',
            'email' => 'konsultan@myfex.com',
            'role_id' => 2
        ]);
        
        User::factory()->create([
            'username' => 'akauntan',
            'name' => 'Pegawai Proses (Kewangan & Pemasaran)',
            'email' => 'akauntan@myfex.com',
            'role_id' => 3
        ]);
        
        User::factory()->create([
            'username' => 'ppf',
            'name' => 'Pegawai Proses (Francais)',
            'email' => 'ppf@myfex.com',
            'role_id' => 4
        ]);
        
        User::factory()->create([
            'username' => 'ppu',
            'name' => 'Pegawai Proses (Utama)',
            'email' => 'ppu@myfex.com',
            'role_id' => 5
        ]);
        
        User::factory()->create([
            'username' => 'kpp',
            'name' => 'Ketua Pegawai Proses',
            'email' => 'kpp@myfex.com',
            'role_id' => 6
        ]);
        
        User::factory()->create([
            'username' => 'pengarah',
            'name' => 'Pengarah',
            'email' => 'pengarah@myfex.com',
            'role_id' => 7
        ]);
        
        User::factory()->create([
            'username' => 'pendaftar',
            'name' => 'Pendaftar',
            'email' => 'pendaftar@myfex.com',
            'role_id' => 8
        ]);
        
        User::factory()->create([
            'username' => 'superadmin',
            'name' => 'Super Admin',
            'email' => 'superadmin@myfex.com',
            'role_id' => 9
        ]);
    }

}
