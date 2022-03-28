<?php

namespace Database\Factories;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'rollNo'=>$this->faker->randomDigit(),
            // 'reg_no'=>$this->faker->randomDigit(),
            // 'school_id'=>$this->faker->randomDigit(),
            'father_name'=>$this->faker->name(),
            'mother_name'=>$this->faker->name(),
            // 'address'=>$this->faker->address(),
            'maths'=>$this->faker->randomDigit(),
            'sci'=>$this->faker->randomDigit(),
            'sst'=>$this->faker->randomDigit(),
            'eng'=>$this->faker->randomDigit(),
            'hindi'=>$this->faker->randomDigit(),
        ];
    }
}
