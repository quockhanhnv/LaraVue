<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Nguyen Van Quoc Khanh', 'email' => 'nvquockhanh0209@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Hoang Quang Huy', 'email' => 'huyhq@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Tran Thi Giang', 'email' => 'giangtt@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Phan Thi Ngoc', 'email' => 'ngocpt@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Nguyen Van Hung', 'email' => 'hungnv@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Nguyen Xuan Hung', 'email' => 'hungnx@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Le Van Khai', 'email' => 'khailv@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Nguyen Minh Hoang', 'email' => 'hoangnm@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Nguyen Tan Linh', 'email' => 'linhnt@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Le Trung Hieu', 'email' => 'hieult@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Doan Anh Hao', 'email' => 'haoda@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Le Xuan Duong', 'email' => 'duonglx@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Nguyen Huu Ba', 'email' => 'banh@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Tran Van Quang', 'email' => 'quangtv@gmail.com', 'password' => Hash::make('admin123')],
            ['name' => 'Nguyen The Hiep', 'email' => 'hiepnt@gmail.com', 'password' => Hash::make('admin123')],
        ];
        DB::table('users')->insert($users);
    }
}
