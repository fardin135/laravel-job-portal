<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Job::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'company_id' => Company::factory(),
            'company_name' => $this->faker->company,
            'job_title' => $this->faker->jobTitle,
            'role' => $this->faker->randomElement(['Developer', 'Designers', 'Marketers', 'UI/UX', 'Others']),
            'job_type' => $this->faker->randomElement(['Full-Time', 'Onsite', 'Remote', 'Contact-Basis']),
            'vacancy' => $this->faker->numberBetween(1, 10),
            'deadline' => $this->faker->dateTimeBetween('now', '+1 year'),
            'required_skills' => json_encode($this->faker->words(5)),
            'location' => $this->faker->address,
            'description' => $this->faker->paragraph,
            'responsibility' => $this->faker->paragraph,
            'qualifications' => $this->faker->paragraph,
            'salary' => $this->faker->numberBetween(1, 1000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
