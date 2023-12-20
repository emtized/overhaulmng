<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $customers = Customer::factory(10)->create();

        $customers->each(function ($customer) {
            $customer->contact()->create();
            $customer->loc()->create();
            $customer->insurance()->create();
            $customer->physical()->create();
            $customer->education()->create();
            $customer->employ()->create();
        });

        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            ImportCitiesTableSeeder::class
        ]);
    }
}
