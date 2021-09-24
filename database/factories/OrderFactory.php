<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' =>$this->faker->phone(),
            'amount' =>$this->faker->amount(),
            'status' =>$this->faker->status(),
            'transaction_id' =>$this->faker->transaction_id(),
            'currency' =>$this->faker->currency(),
            'currency' =>$this->faker->currency(),
        ];
    }
}
