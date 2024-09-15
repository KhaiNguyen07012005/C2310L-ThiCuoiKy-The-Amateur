<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Thực hiện xóa tất cả các bản ghi trong bảng payments trước khi chèn dữ liệu mới
        DB::table('payments')->truncate();

        // Chèn dữ liệu mẫu vào bảng payments
        Payment::create([
            'user_id' => 1, // Đảm bảo rằng user_id tồn tại trong bảng users
            'payment_receipt' => 'RECEIPT001',
            'is_paid' => true,
            'cost' => 150,
        ]);

        Payment::create([
            'user_id' => 2, // Đảm bảo rằng user_id tồn tại trong bảng users
            'payment_receipt' => 'RECEIPT002',
            'is_paid' => false,
            'cost' => 250,
        ]);

        Payment::create([
            'user_id' => 1, // Đảm bảo rằng user_id tồn tại trong bảng users
            'payment_receipt' => 'RECEIPT003',
            'is_paid' => true,
            'cost' => 300,
        ]);
    }
}
