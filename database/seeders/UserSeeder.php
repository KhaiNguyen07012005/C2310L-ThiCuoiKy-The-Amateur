<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password123'), // Băm mật khẩu
            'age' => 30,
            'call_num' => '1234567890',
            'gender' => 'l', // Sử dụng giá trị phù hợp với enum
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'password' => bcrypt('password123'), // Băm mật khẩu
            'age' => 28,
            'call_num' => '0987654321',
            'gender' => 'p', // Sử dụng giá trị phù hợp với enum
            'is_admin' => false,
        ]);
    }
}
