<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Thêm các quyền
        Permission::create(['name' => 'xemtuongtac']);
        Permission::create(['name' => 'taotuongtac']);
        Permission::create(['name' => 'suatuongtac']);
        Permission::create(['name' => 'xoatuongtac']);

        Permission::create(['name' => 'xemtaikhoan']);
        Permission::create(['name' => 'taotaikhoan']);
        Permission::create(['name' => 'suataikhoan']);
        Permission::create(['name' => 'xoataikhoan']);

        Permission::create(['name' => 'xembaocao']);
        Permission::create(['name' => 'inbaocao']);
        Permission::create(['name' => 'xoabaocao']);

        Permission::create(['name' => 'xemthongke']);

    }
}
