<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $religion = $this->faker->randomElement(['Islam', 'Krisen Katolik', 'Kristen Protestan', 'Buddha', 'Hindu', 'Khonghucu']);
        $major = $this->faker->randomElement(['Rekayasa Perangkat Lunak', 'Tata Boga', 'Tata Busana', 'Multimedia']);

        return [
            'name' => $this->faker->firstName($gender),
            'gender' => $gender,
            'address' => $this->faker->address(),
            'religion' => $religion,
            'from_jhs' => $this->faker->name(),
            'major' => $major,
        ];
    }
}
