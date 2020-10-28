<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Helpers\Helper;
use App\Models\Role;
use App\Models\User;
use App\Models\Company;
use App\Models\Brand;
use App\Models\BrandRights;

class TestSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $role1 = Role::create(['name' => 'Pengguna Perniagaan Francais']);
        if ($role1) {
            // 1
            $company1 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DRAF
            ]);
            if ($company1) {
                $user1 = User::factory()->create([
                    'username' => $company1->reg_no,
                    'name' => 'Pengguna Perniagaan 1',
                    'email' => 'user1@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company1->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
            }

            // 2
            $company2 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::BARU
            ]);
            if ($company2) {
                $user2 = User::factory()->create([
                    'username' => $company2->reg_no,
                    'name' => 'Pengguna Perniagaan 2',
                    'email' => 'user2@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company2->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
            }

            // 3
            $company3 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DINILAI
            ]);
            if ($company3) {
                $user3 = User::factory()->create([
                    'username' => $company3->reg_no,
                    'name' => 'Pengguna Perniagaan 3',
                    'email' => 'user3@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company3->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
            }

            // 4
            $company4 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DILULUS
            ]);
            if ($company4) {
                $user4 = User::factory()->create([
                    'username' => $company4->reg_no,
                    'name' => 'Pengguna Perniagaan 4',
                    'email' => 'user4@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company4->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
            }

            // 5
            $company5 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DILULUS
            ]);
            if ($company5) {
                $user5 = User::factory()->create([
                    'username' => $company5->reg_no,
                    'name' => 'Pengguna Perniagaan 5',
                    'email' => 'user5@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company5->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
                if ($user5) {
                    $brand1 = Brand::factory()->create([
                        'name' => 'BrandOne',
                        'company' => 'Brand Company One',
                        'country_id' => 226
                    ]);
                    if ($brand1) {
                        BrandRights::factory()->create([
                            'brand_id' => $brand1->id,
                            'company_id' => $company5->id,
                            'franchise_type_id' => Helper::PEMBERI_FRANCAIS,
                            'start_date' => '2020-10-01',
                            'end_date' => '2030-10-01',
                            'consultant_id' => 0,
                            'status' => BrandRights::DRAF
                        ]);
                    }
                }
            }

            // 6
            $company6 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DILULUS
            ]);
            if ($company6) {
                $user6 = User::factory()->create([
                    'username' => $company6->reg_no,
                    'name' => 'Pengguna Perniagaan 6',
                    'email' => 'user6@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company6->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
                if ($user6) {
                    $brand2 = Brand::factory()->create([
                        'name' => 'BrandTwo',
                        'company' => 'Brand Company Two',
                        'country_id' => 226
                    ]);
                    if ($brand2) {
                        BrandRights::factory()->create([
                            'brand_id' => $brand2->id,
                            'company_id' => $company6->id,
                            'franchise_type_id' => Helper::FRANCAIS_INDUK,
                            'start_date' => '2020-10-01',
                            'end_date' => '2030-10-01',
                            'consultant_id' => 0,
                            'status' => BrandRights::BARU
                        ]);
                    }
                }
            }

            // 7
            $company7 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DILULUS
            ]);
            if ($company7) {
                $user7 = User::factory()->create([
                    'username' => $company7->reg_no,
                    'name' => 'Pengguna Perniagaan 7',
                    'email' => 'user7@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company7->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
                if ($user7) {
                    $brand3 = Brand::factory()->create([
                        'name' => 'BrandThree',
                        'company' => 'Brand Company Three',
                        'country_id' => 226
                    ]);
                    if ($brand3) {
                        BrandRights::factory()->create([
                            'brand_id' => $brand3->id,
                            'company_id' => $company7->id,
                            'franchise_type_id' => Helper::PEMBERI_FRANCAIS,
                            'start_date' => '2020-10-01',
                            'end_date' => '2030-10-01',
                            'consultant_id' => 0,
                            'status' => BrandRights::DISYOR
                        ]);
                    }
                }
            }

            // 8
            $company8 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DILULUS
            ]);
            if ($company8) {
                $user8 = User::factory()->create([
                    'username' => $company8->reg_no,
                    'name' => 'Pengguna Perniagaan 8',
                    'email' => 'user8@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company8->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
                if ($user8) {
                    $brand4 = Brand::factory()->create([
                        'name' => 'BrandFour',
                        'company' => 'Brand Company Four',
                        'country_id' => 226
                    ]);
                    if ($brand4) {
                        BrandRights::factory()->create([
                            'brand_id' => $brand4->id,
                            'company_id' => $company8->id,
                            'franchise_type_id' => Helper::FRANCAIS_INDUK,
                            'start_date' => '2020-10-01',
                            'end_date' => '2030-10-01',
                            'consultant_id' => 0,
                            'status' => BrandRights::DISOKONG
                        ]);
                    }
                }
            }

            // 9
            $company9 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DILULUS
            ]);
            if ($company9) {
                $user9 = User::factory()->create([
                    'username' => $company9->reg_no,
                    'name' => 'Pengguna Perniagaan 9',
                    'email' => 'user9@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company9->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
                if ($user9) {
                    $brand5 = Brand::factory()->create([
                        'name' => 'BrandFive',
                        'company' => 'Brand Company Five',
                        'country_id' => 226
                    ]);
                    if ($brand5) {
                        BrandRights::factory()->create([
                            'brand_id' => $brand5->id,
                            'company_id' => $company9->id,
                            'franchise_type_id' => Helper::PEMBERI_FRANCAIS,
                            'start_date' => '2020-10-01',
                            'end_date' => '2030-10-01',
                            'consultant_id' => 0,
                            'status' => BrandRights::DIPERAKUI
                        ]);
                    }
                }
            }

            // 10
            $company10 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DILULUS
            ]);
            if ($company10) {
                $user10 = User::factory()->create([
                    'username' => $company10->reg_no,
                    'name' => 'Pengguna Perniagaan 10',
                    'email' => 'user10@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company10->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
                if ($user10) {
                    $brand6 = Brand::factory()->create([
                        'name' => 'BrandSix',
                        'company' => 'Brand Company Six',
                        'country_id' => 226
                    ]);
                    if ($brand6) {
                        BrandRights::factory()->create([
                            'brand_id' => $brand6->id,
                            'company_id' => $company10->id,
                            'franchise_type_id' => Helper::PEMBERI_FRANCAIS,
                            'start_date' => '2020-10-01',
                            'end_date' => '2030-10-01',
                            'consultant_id' => 0,
                            'status' => BrandRights::DILULUS
                        ]);
                    }
                }
            }

            // 11
            $company11 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DILULUS
            ]);
            if ($company11) {
                $user11 = User::factory()->create([
                    'username' => $company11->reg_no,
                    'name' => 'Pengguna Perniagaan 11',
                    'email' => 'user11@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company11->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
                if ($user11) {
                    $brand7 = Brand::factory()->create([
                        'name' => 'BrandSeven',
                        'company' => 'Brand Company Seven',
                        'country_id' => 226
                    ]);
                    if ($brand7) {
                        BrandRights::factory()->create([
                            'brand_id' => $brand7->id,
                            'company_id' => $company11->id,
                            'franchise_type_id' => Helper::PEMBERI_FRANCAIS,
                            'start_date' => '2020-10-01',
                            'end_date' => '2030-10-01',
                            'consultant_id' => 0,
                            'status' => BrandRights::DITOLAK
                        ]);
                    }
                }
            }

            // 12
            $company12 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DRAF
            ]);
            if ($company12) {
                $user12 = User::factory()->create([
                    'username' => $company12->reg_no,
                    'name' => 'Pengguna Perniagaan 12',
                    'email' => 'user12@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company12->id,
                    'staff' => false,
                    'status' => User::DINILAI
                ]);
            }

            // 13
            $company13 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DRAF
            ]);
            if ($company13) {
                $user13 = User::factory()->create([
                    'username' => $company13->reg_no,
                    'name' => 'Pengguna Perniagaan 13',
                    'email' => 'user13@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company13->id,
                    'staff' => false,
                    'status' => User::BARU
                ]);
            }

            // 14
            $company14 = Company::factory()->create([
                'consultant' => false,
                'status' => Company::DRAF
            ]);
            if ($company14) {
                $user14 = User::factory()->create([
                    'username' => $company14->reg_no,
                    'name' => 'Pengguna Perniagaan 14',
                    'email' => 'user14@myfex.com',
                    'role_id' => $role1->id,
                    'company_id' => $company14->id,
                    'staff' => false,
                    'status' => User::DITOLAK
                ]);
            }
        }
        /*
         * END ROLE 1
         */

        $role2 = Role::create(['name' => 'Pengguna Konsultan Francais']);
        if ($role2) {
            $company1 = Company::factory()->create([
                'consultant' => true,
                'status' => Company::DILULUS
            ]);
            if ($company1) {
                $user1 = User::factory()->create([
                    'username' => $company1->reg_no,
                    'name' => 'Pengguna Konsultan 1',
                    'email' => 'konsultan1@myfex.com',
                    'role_id' => 2,
                    'company_id' => $company1->id,
                    'staff' => false,
                    'status' => User::DILULUS
                ]);
                if ($user1) {
                    $com1 = Company::factory()->create([
                        'consultant' => false,
                        'status' => Company::DILULUS,
                        'consultant_id' => $user1->id
                    ]);
                    if ($com1) {
                        $brand8 = Brand::factory()->create([
                            'name' => 'BrandEight',
                            'company' => 'Brand Company Eight',
                            'country_id' => 226
                        ]);
                        if ($brand8) {
                            BrandRights::factory()->create([
                                'brand_id' => $brand8->id,
                                'company_id' => $com1->id,
                                'franchise_type_id' => Helper::PEMBERI_FRANCAIS,
                                'start_date' => '2020-10-01',
                                'end_date' => '2030-10-01',
                                'consultant_id' => $user1->id,
                                'status' => BrandRights::DRAF
                            ]);
                        }
                    }
                    
                    $com2 = Company::factory()->create([
                        'consultant' => false,
                        'status' => Company::DILULUS,
                        'consultant_id' => $user1->id
                    ]);
                    if ($com2) {
                        $brand9 = Brand::factory()->create([
                            'name' => 'BrandNine',
                            'company' => 'Brand Company Nine',
                            'country_id' => 226
                        ]);
                        if ($brand9) {
                            BrandRights::factory()->create([
                                'brand_id' => $brand9->id,
                                'company_id' => $com2->id,
                                'franchise_type_id' => Helper::FRANCAIS_INDUK,
                                'start_date' => '2020-10-01',
                                'end_date' => '2030-10-01',
                                'consultant_id' => $user1->id,
                                'status' => BrandRights::BARU
                            ]);
                        }
                    }
                    
                    $com3 = Company::factory()->create([
                        'consultant' => false,
                        'status' => Company::DILULUS,
                        'consultant_id' => $user1->id
                    ]);
                    if ($com3) {
                        $brand10 = Brand::factory()->create([
                            'name' => 'BrandTen',
                            'company' => 'Brand Company Ten',
                            'country_id' => 226
                        ]);
                        if ($brand10) {
                            BrandRights::factory()->create([
                                'brand_id' => $brand10->id,
                                'company_id' => $com3->id,
                                'franchise_type_id' => Helper::PEMBERI_FRANCAIS,
                                'start_date' => '2020-10-01',
                                'end_date' => '2030-10-01',
                                'consultant_id' => $user1->id,
                                'status' => BrandRights::DISYOR
                            ]);
                        }
                    }
                    
                    $com4 = Company::factory()->create([
                        'consultant' => false,
                        'status' => Company::DINILAI,
                        'consultant_id' => $user1->id
                    ]);

                    $com5 = Company::factory()->create([
                        'consultant' => false,
                        'status' => Company::BARU,
                        'consultant_id' => $user1->id
                    ]);

                    $com6 = Company::factory()->create([
                        'consultant' => false,
                        'status' => Company::DRAF,
                        'consultant_id' => $user1->id
                    ]);
                    
                    $com7 = Company::factory()->create([
                        'consultant' => false,
                        'status' => Company::DITOLAK,
                        'consultant_id' => $user1->id
                    ]);
                }
            }

            $company2 = Company::factory()->create([
                'consultant' => true,
                'status' => Company::DITOLAK
            ]);
            if ($company2) {
                $user2 = User::factory()->create([
                    'username' => $company2->reg_no,
                    'name' => 'Pengguna Konsultan 2',
                    'email' => 'konsultan2@myfex.com',
                    'role_id' => 2,
                    'company_id' => $company2->id,
                    'staff' => false,
                    'status' => User::DITOLAK
                ]);
            }
        }

        $role3 = Role::create(['name' => 'Pegawai Proses (Kewangan & Pemasaran)']);
        if ($role3) {
            User::factory()->create([
                'username' => 'akauntan',
                'name' => 'Pegawai Proses (Kewangan & Pemasaran)',
                'email' => 'akauntan@myfex.com',
                'role_id' => $role3->id,
                'staff' => true,
                'status' => User::DITOLAK
            ]);
        }

        $role4 = Role::create(['name' => 'Pegawai Proses (Francais)']);
        if ($role4) {
            User::factory()->create([
                'username' => 'ppf',
                'name' => 'Pegawai Proses (Francais)',
                'email' => 'ppf@myfex.com',
                'role_id' => $role4->id,
                'staff' => true,
                'status' => User::DILULUS
            ]);
        }

        $role5 = Role::create(['name' => 'Pegawai Proses (Dasar)']);
        if ($role5) {
            User::factory()->create([
                'username' => 'dasar',
                'name' => 'Pegawai Proses (Dasar)',
                'email' => 'dasar@myfex.com',
                'role_id' => $role5->id,
                'staff' => true,
                'status' => User::DILULUS
            ]);
        }

        $role6 = Role::create(['name' => 'Pegawai Proses (Utama)']);
        if ($role6) {
            User::factory()->create([
                'username' => 'ppu',
                'name' => 'Pegawai Proses (Utama)',
                'email' => 'ppu@myfex.com',
                'role_id' => $role6->id,
                'staff' => true,
                'status' => User::DILULUS
            ]);
        }

        $role7 = Role::create(['name' => 'Ketua Pegawai Proses']);
        if ($role7) {
            User::factory()->create([
                'username' => 'kpp',
                'name' => 'Ketua Pegawai Proses',
                'email' => 'kpp@myfex.com',
                'role_id' => $role7->id,
                'staff' => true,
                'status' => User::DILULUS
            ]);
        }

        $role8 = Role::create(['name' => 'Pengarah']);
        if ($role8) {
            User::factory()->create([
                'username' => 'pengarah',
                'name' => 'Pengarah',
                'email' => 'pengarah@myfex.com',
                'role_id' => $role8->id,
                'staff' => true,
                'status' => User::DILULUS
            ]);
        }

        $role9 = Role::create(['name' => 'Pendaftar']);
        if ($role9) {
            User::factory()->create([
                'username' => 'pendaftar',
                'name' => 'Pendaftar',
                'email' => 'pendaftar@myfex.com',
                'role_id' => $role9->id,
                'staff' => true,
                'status' => User::DILULUS
            ]);
        }

        $role10 = Role::create(['name' => 'Super Admin']);
        if ($role10) {
            User::factory()->create([
                'username' => 'superadmin',
                'name' => 'Super Admin',
                'email' => 'superadmin@myfex.com',
                'role_id' => $role10->id,
                'staff' => true,
                'status' => User::DILULUS
            ]);
        }
    }

}
