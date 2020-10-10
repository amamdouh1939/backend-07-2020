<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // en[name], en[description], ar[name]
            'en' => [
                'name' => $this->faker->name,
                'description' => $this->faker->text(200)
            ],
            'ar' => [
                'name' => 'AR-' . $this->faker->name
            ],
            'price' => $this->faker->randomFloat(2, 1, 2000),
            'quantity' => $this->faker->randomNumber(2),
            'category_id' => $this->faker->numberBetween(1, 100),
        ];
    }
}
