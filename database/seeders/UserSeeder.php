<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::updateOrCreate(
            [
                'email' => 'admin@admin.com'
            ],
            [
                'name' => 'Soccer Manager',
                'password' => bcrypt('admin')
            ]
        );
    }
}
