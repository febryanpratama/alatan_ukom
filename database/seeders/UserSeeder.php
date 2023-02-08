<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ]);
        $user->assignRole('Admin');

        $user1 = User::create([
            'name' => 'Pokja',
            'email' => 'pokja@pokja.com',
            'password' => bcrypt('pokja123')
        ]);
        $user1->assignRole('Pokja');

        $user2 = User::create([
            'name' => 'PPK',
            'email' => 'ppk@ppk.com',
            'password' => bcrypt('ppk123')
        ]);
        $user2->assignRole('PPK');
    }
}
