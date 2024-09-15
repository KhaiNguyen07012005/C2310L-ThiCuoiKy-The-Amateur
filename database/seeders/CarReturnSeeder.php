<?php

namespace Database\Seeders;

use App\Models\CarReturn;
use Illuminate\Database\Seeder;

class CarReturnSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CarReturn::create([
            'order_id' => 1, // Thay đổi theo ID thực tế của đơn hàng
            'date_of_return' => '2024-09-14',
            'fines' => 50.00,
            'validate_admin' => true,
        ]);

        // Thêm dữ liệu mẫu khác nếu cần
    }
}
