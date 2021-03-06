<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostcodeN9Seeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('postcodes')->where('state_id', 5)->truncate();
        
        $negeriSembilan = [
            ['state_id' => 5, 'code' => '70000', 'name' => 'Pusat Perniagaan Templer'],
            ['state_id' => 5, 'code' => '70100', 'name' => 'Taman Bukit Punca Emas'],
            ['state_id' => 5, 'code' => '70100', 'name' => 'Villa Taman Tasik'],
            ['state_id' => 5, 'code' => '70100', 'name' => 'Pusat Komersial Rasah Prima'],
            ['state_id' => 5, 'code' => '70100', 'name' => 'Lorong Rahang 1'],
            ['state_id' => 5, 'code' => '70100', 'name' => 'Taman Seri Binjai'],
            ['state_id' => 5, 'code' => '70200', 'name' => 'Bandar Ainsdale'],
            ['state_id' => 5, 'code' => '70200', 'name' => 'Bukit Chemara'],
            ['state_id' => 5, 'code' => '70200', 'name' => 'Taman Belian Tropika'],
            ['state_id' => 5, 'code' => '70200', 'name' => 'Taman Bukit Dawn'],
            ['state_id' => 5, 'code' => '70200', 'name' => 'Era Square'],
            ['state_id' => 5, 'code' => '70200', 'name' => 'Taman Jasper Jaya'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Taman Bukit Nuri Indah'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Duta'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Indah'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Prima'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Sutera'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Taman Saujana Tropika'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Rimba Residensi'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Pusat Komersial Universiti'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Taman Cenderawasih Indah'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Taman Kerisi Indah'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Medan Perniagaan Mambau'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'One Avenue'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Pusat Dagangan Seremban 2'],
            ['state_id' => 5, 'code' => '70300', 'name' => 'Pusat Komersial Seksyen C'],
            ['state_id' => 5, 'code' => '70400', 'name' => 'Jalan Tuan Haji Said 2'],
            ['state_id' => 5, 'code' => '70400', 'name' => 'Taman Casurina'],
            ['state_id' => 5, 'code' => '70400', 'name' => 'Taman Sri Penaga'],
            ['state_id' => 5, 'code' => '70400', 'name' => 'Taman Vila Palma'],
            ['state_id' => 5, 'code' => '70400', 'name' => 'Taman Seri Sentosa '],
            ['state_id' => 5, 'code' => '70450', 'name' => 'Pusat Perdagangan Bukit Emas 2'],
            ['state_id' => 5, 'code' => '70450', 'name' => 'Taman Rashidah Utama 2'],
            ['state_id' => 5, 'code' => '70450', 'name' => 'Medan Perniagaan Senawang Jaya'],
            ['state_id' => 5, 'code' => '70450', 'name' => 'Persada Cattleya'],
            ['state_id' => 5, 'code' => '70450', 'name' => 'Kawasan Industri Sinar Andalas'],
            ['state_id' => 5, 'code' => '70450', 'name' => 'Bandar Utama Senawang'],
            ['state_id' => 5, 'code' => '70450', 'name' => 'Desa Kenanga Indah'],
            ['state_id' => 5, 'code' => '70450', 'name' => 'Bandar Prima Senawang'],
            ['state_id' => 5, 'code' => '70450', 'name' => 'Jalan Paroi-Senawang'],
            ['state_id' => 5, 'code' => '71000', 'name' => 'Taman Kiara 2'],
            ['state_id' => 5, 'code' => '71200', 'name' => 'Pusat Perniagaan Emas'],
            ['state_id' => 5, 'code' => '71200', 'name' => 'Taman Berlian'],
            ['state_id' => 5, 'code' => '71200', 'name' => 'Taman Emas Perdana'],
            ['state_id' => 5, 'code' => '71400', 'name' => 'Kawasan Industri Tuanku Jaafar 3'],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Taman Gading Indah'],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Taman Gading Jaya'],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Taman Kayangan'],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Pusat Perniagaan Bunga Raya'],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Taman Beringin Jaya'],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Laman Suria '],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Taman Murni'],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Taman Sri Gading'],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Kawasan Perindustrian Ringan College Heights'],
            ['state_id' => 5, 'code' => '71700', 'name' => 'Bandar Baru Mantin'],
            ['state_id' => 5, 'code' => '71760', 'name' => 'Kompleks Pendidikan Bandar Enstek'],
            ['state_id' => 5, 'code' => '71760', 'name' => 'Taman Timur Enstek'],
            ['state_id' => 5, 'code' => '71760', 'name' => 'Jalan Timur 1/2'],
            ['state_id' => 5, 'code' => '71760', 'name' => 'Epson College'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Desa Cempaka'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Bandar Nilai Impian'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Laman Alamanda'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Taman Yadin Impiana'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Laman Komersial Areca'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Taman Iris'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Taman Desa Hijauan'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Laman Cempaka'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Laman Seroja'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Taman Desa Cempaka 2'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Putra Point'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Pusat Perniagaan Desa Kolej'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Taman Amra'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Bukit Citra Residensi'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Jalan Desa Kasia 2/1A'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Laman Azalea'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Laman Galla'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Taman Bucida Hijauan'],
            ['state_id' => 5, 'code' => '71800', 'name' => 'Taman Desa Mayang Sari'],
            ['state_id' => 5, 'code' => '71900', 'name' => 'Bukit Ara Perdana'],
            ['state_id' => 5, 'code' => '71900', 'name' => 'Taman Cermai Impian'],
            ['state_id' => 5, 'code' => '71900', 'name' => 'Taman Sri Rambai'],
            ['state_id' => 5, 'code' => '71900', 'name' => 'Jalan Koperasi Labu 1'],
            ['state_id' => 5, 'code' => '71950', 'name' => 'Pusat Dagangan Sendayan'],
            ['state_id' => 5, 'code' => '71950', 'name' => 'Taman Hijayu'],
            ['state_id' => 5, 'code' => '71950', 'name' => 'Kip Sentral'],
            ['state_id' => 5, 'code' => '72120', 'name' => 'Pusat Perniagaan Ara'],
            ['state_id' => 5, 'code' => '73000', 'name' => 'Dataran Satria'],
            ['state_id' => 5, 'code' => '73000', 'name' => 'Pusat Komersial Delima Indah'],
            ['state_id' => 5, 'code' => '73000', 'name' => 'Taman Satria 2'],
            ['state_id' => 5, 'code' => '73000', 'name' => 'Taman Kasturi'],
            ['state_id' => 5, 'code' => '73200', 'name' => 'Taman Komersial Suria'],
            ['state_id' => 5, 'code' => '73200', 'name' => 'Taman Orkid 2'],
            ['state_id' => 5, 'code' => '73200', 'name' => 'Taman Melor 2'],
            ['state_id' => 5, 'code' => '73400', 'name' => 'Pusat Komersial Pahlawan'],
            ['state_id' => 5, 'code' => '73400', 'name' => 'Pusat Perniagaan Harmoni Gemas'],
            ['state_id' => 5, 'code' => '73400', 'name' => 'Taman Dataran Suria'],
            ['state_id' => 5, 'code' => '73400', 'name' => 'Pusat Komersial Seri Mutiara'],
            ['state_id' => 5, 'code' => '73400', 'name' => 'Taman Seri Mutiara']
        ];
        
        DB::table('postcodes')->insert($negeriSembilan);
    }

}
