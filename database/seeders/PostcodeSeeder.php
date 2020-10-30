<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostcodeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(PostcodeJohorSeeder::class);
        $this->call(PostcodeKLSeeder::class);
        $this->call(PostcodeKedahSeeder::class);
        $this->call(PostcodeKelantanSeeder::class);
        $this->call(PostcodeLabuanSeeder::class);
        $this->call(PostcodeMelakaSeeder::class);
        $this->call(PostcodeN9Seeder::class);
        $this->call(PostcodePahangSeeder::class);
        $this->call(PostcodePerakSeeder::class);
        $this->call(PostcodePerlisSeeder::class);
        $this->call(PostcodePulauPinangSeeder::class);
        $this->call(PostcodePutrajayaSeeder::class);
        $this->call(PostcodeSabahSeeder::class);
        $this->call(PostcodeSarawakSeeder::class);
        $this->call(PostcodeSelangorSeeder::class);
        $this->call(PostcodeTerengganuSeeder::class);
    }

}
