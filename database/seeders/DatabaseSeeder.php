<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin'
        ]);
        User::create([
            'name' => 'admin',
            'email' =>  'admin@mail.com',
            'phone_number' => '089787676453',
            'password' => Hash::make('123123123')
        ])->assignRole('admin');
    }
}
