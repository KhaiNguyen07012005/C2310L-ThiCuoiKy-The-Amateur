<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'name' => 'Toyota Corolla',
            'brand' => 'Toyota',
            'colour' => 'Black',
            'plat_num' => '123-ABC',
            'capacity' => 5,
            'fuel' => 'Gasoline',
            'price' => 30000,
            'car_img' => 'toyota_corolla.jpg',
        ]);

        Car::create([
            'name' => 'Honda Civic',
            'brand' => 'Honda',
            'colour' => 'White',
            'plat_num' => '456-DEF',
            'capacity' => 5,
            'fuel' => 'Gasoline',
            'price' => 25000,
            'car_img' => 'honda_civic.jpg',
        ]);

        // Thêm các mẫu xe khác nếu cần
    }
}
