<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Xóa tất cả dữ liệu hiện có trong bảng orders trước khi chèn dữ liệu mới
        DB::table('orders')->truncate();

        // Tạo dữ liệu mẫu cho bảng orders
        Order::create([
            'payment_id' => 1, // Đảm bảo rằng payment_id tồn tại trong bảng payments
            'car_id' => 1, // Đảm bảo rằng car_id tồn tại trong bảng cars
            'rent_date' => '2024-09-01',
            'return_date' => '2024-09-07',
        ]);

        Order::create([
            'payment_id' => 2, // Đảm bảo rằng payment_id tồn tại trong bảng payments
            'car_id' => 2, // Đảm bảo rằng car_id tồn tại trong bảng cars
            'rent_date' => '2024-09-10',
            'return_date' => '2024-09-15',
        ]);

        Order::create([
            'payment_id' => 3, // Đảm bảo rằng payment_id tồn tại trong bảng payments
            'car_id' => 3, // Đảm bảo rằng car_id tồn tại trong bảng cars
            'rent_date' => '2024-09-20',
            'return_date' => '2024-09-25',
        ]);
    }
}
