<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,100),
            'created_at' => now(),
            'end_date'  =>  Carbon::today()->addDays(30),
            'plan_id'   =>  rand(1,3),
            'invested_amount' => rand(500, 1000)
        ];
    }
}
