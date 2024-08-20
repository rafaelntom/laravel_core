<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(["Billed", "Paid", "Void"]);

        return [
            "customer_id" => Customer::factory(),
            "ammount" => $this->faker->numberBetween(100, 20000),
            "status" => $status,
            "billed_date" => $this->faker->dateTimeThisYear(),
            "paid_date" => $status === "Paid" ? $this->faker->dateTimeThisYear() : null,
        ];
    }
}
