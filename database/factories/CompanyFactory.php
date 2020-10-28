<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory {

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        static $count = 1;
        static $reg = 11;

        return [
            'name' => 'Company ' . $count,
            'name_old' => 'Old Name ' . $count,
            'reg_no' => '202010700' . $reg,
            'reg_no_old' => 'A10700' . $reg++,
            'email' => 'company' . $count . '@example.com',
            'phone_no' => '012345678' . $count++,
            'reg_address' => 'Alamat Baris 1',
            'reg_address2' => 'Alamat Baris 2',
            'reg_address3' => 'Alamat Baris 3',
            'reg_postcode' => '57000',
            'reg_city' => 'Bukit Jalil',
            'reg_country' => 'Kuala Lumpur',
            'buss_address' => 'Alamat Bisnes Baris 1',
            'buss_address2' => 'Alamat Bisnes Baris 2',
            'buss_address3' => 'Alamat Bisnes Baris 3',
            'buss_postcode' => '47100',
            'buss_city' => 'Puchong',
            'buss_country' => 'Selangor',
            'ssm_cert' => 'assets/uploads/ssm_cert.pdf',
            'auth_letter' => 'assets/uploads/auth_letter.pdf',
            'consultant' => false,
            'status' => 0
        ];
    }

}
