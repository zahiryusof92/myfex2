<?php

namespace Database\Factories;

use App\Models\BrandRights;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandRightsFactory extends Factory {

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BrandRights::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        static $count = 1;

        return [
            'myipo_ref_no' => 'MYIPO-000' . $count++,
            'deed_of_assigment' => 'assets/uploads/deed_of_assigment.pdf',
            'consultant_id' => 0,
        ];
    }

}
