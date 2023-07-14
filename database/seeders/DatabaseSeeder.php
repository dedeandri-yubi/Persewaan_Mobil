<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\Pesanan;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Role::factory(5) -> create();
        DB ::table('users')->insert([
            'name' =>'admin',
            'role_id' => '1',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str ::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Pesanan::factory(15) -> create();

    }
}
