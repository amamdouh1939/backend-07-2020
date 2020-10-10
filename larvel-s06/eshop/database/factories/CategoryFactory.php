<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // name[ar], name[en]
            'name' => [
                'en' => $this->faker->name,
                'ar' => $this->faker->name
            ],
            'description' => [
                'en' => $this->faker->text(100),
                'ar' => $this->faker->text(100)
            ]
        ];
    }
}
