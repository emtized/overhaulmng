<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE TABLE `roles`');
        $role_admin = Role::create(['name' => 'Administrator','title' => 'مدیر سیستم', 'guard_name' => 'web']);
        $role = Role::create(['name' => 'Admin','title' => 'مدیر کل', 'guard_name' => 'web']);
        $role = Role::create(['name' => 'Support Manager','title' => 'مدیر پشتیبانی', 'guard_name' => 'web']);

        $role_admin->givePermissionTo('administrator');
    }
}
