<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB, Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' =>'admin@admin.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'status' => 1,
        ]);
    }
}
