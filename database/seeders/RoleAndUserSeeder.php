<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Tạo roles
        $roleAdmin = Role::create(['name' => 'Admin']);

        // Tạo user admin
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123') // Mật khẩu này nên được lưu trữ an toàn hoặc thay đổi trước khi triển khai
        ]);

        // Gán role Admin cho user
        $admin->assignRole($roleAdmin);
    }
}
