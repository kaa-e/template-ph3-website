<?php

namespace Database\Factories;

use App\Models\Questions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuestionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Questions::class;

    public function definition(): array
    {
        return [
            'image' => fake()->imageUrl().'.png',
            'text' => fake()->realText(30),
            'supplement' => fake()->realText(50),
            'quiz_id' => fake()->numberBetween(2,3),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}
