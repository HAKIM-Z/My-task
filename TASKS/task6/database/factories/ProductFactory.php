<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Pro Wireless Headphones', 'Ultra Wide Monitor 34"', 'Mechanical Gaming Keyboard',
                'Ergonomic Office Chair', 'Leather Travel Backpack', 'Minimalist Smart Watch',
                'Portable Bluetooth Speaker', 'High-Speed SSD 1TB', '4K Action Camera',
                'Minimalist Leather Wallet', 'Cotton Crewneck Tee', 'Active Running Shoes',
                'Noise Cancelling Earbuds', 'Wireless Charger Stand', 'Coffee Maker 12-Cup'
            ]) . ' ' . $this->faker->numberBetween(100, 999),
            'desc' => $this->faker->paragraph(2),
            'price' => $this->faker->randomFloat(2, 10, 500),
        ];
    }
}
