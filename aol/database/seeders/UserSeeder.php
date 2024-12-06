<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@admin.com',
            'birth_date' => fake()->dateTimeBetween('-20 years', '-5 years'),
            'password'=> Hash::make('admin123')
        ]);
    }
}
