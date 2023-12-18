<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE TABLE `permissions`');
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'administrator','title'=>'مدیرکل']);
        Permission::create(['name' => 'edit user','title'=>'ویرایش کاربر']);
        Permission::create(['name' => 'delete user','title'=>'حذف کاربر']);
        Permission::create(['name' => 'add user','title'=>'ایجاد کاربر']);
        Permission::create(['name' => 'index user','title'=>'لیست کاربر']);

        Permission::create(['name' => 'add roles','title'=>'ایجاد نقش']);
        Permission::create(['name' => 'edit roles','title'=>'ویرایش نقش']);
        Permission::create(['name' => 'delete roles','title'=>'حذف نقش']);
        Permission::create(['name' => 'index roles','title'=>'لیست نفش']);

        Permission::create(['name' => 'add permission','title'=>'ایجاد دسترسی']);
        Permission::create(['name' => 'edit permission','title'=>'ویرایش دسترسی']);
        Permission::create(['name' => 'delete permission','title'=>'حذف دسترسی']);
        Permission::create(['name' => 'index permission','title'=>'لیست دسترسی']);

        Permission::create(['name' => 'add category','title'=>'ایجاد دسته بندی']);
        Permission::create(['name' => 'edit category','title'=>'ویرایش دسته بندی']);
        Permission::create(['name' => 'delete category','title'=>'حذف دسته بندی']);
        Permission::create(['name' => 'index category','title'=>'لیست دسته بندی']);

        Permission::create(['name' => 'add comment','title'=>'ایجاد کامنت']);
        Permission::create(['name' => 'edit comment','title'=>'ویرایش کامنت']);
        Permission::create(['name' => 'delete comment','title'=>'حذف کامنت']);
        Permission::create(['name' => 'index comment','title'=>'لیست کامنت']);


        Permission::create(['name' => 'add customer','title'=>'ایجاد مشتری']);
        Permission::create(['name' => 'edit customer','title'=>'مدیریت مشتری']);
        Permission::create(['name' => 'delete customer','title'=>'حذف مشتری']);
        Permission::create(['name' => 'index customer','title'=>'لیست مشتری']);

    }
}
