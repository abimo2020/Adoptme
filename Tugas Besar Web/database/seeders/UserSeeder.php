<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'admin@gmail.com',
            'alamat' => 'admin',
            'no_hp' => '0895360053889',
            'role' => 'admin',
            'email_verified_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
