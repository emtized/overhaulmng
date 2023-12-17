<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE TABLE `users`');
        $user = User::create([
            'first_name' => 'مرتضی',
            'last_name' => 'نصرالهی',
            'email' => 'mortezanasrollahi78@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        $user->assignRole('Administrator');

        $user2 = User::create([
            'first_name' => 'مهیار',
            'last_name' => 'ترکمن زاده',
            'email' => 'emtized@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        $user2->assignRole('Admin');
    }
}
