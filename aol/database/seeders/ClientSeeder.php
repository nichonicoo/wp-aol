<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i=0; $i<10; $i++){
            DB::table('clients')->insert([
                'first_name' => fake()->firstName('female'),
                'role' => 'user',
                'last_name' => fake()->lastName('female'),
                'username' => fake()->userName(),
                'birth_date' => fake()->dateTimeBetween('-20 years', '-5 years'),
                'password'=> fake()->password('8', 20)
            ]);
        }

        DB::table('clients')->insert(
            [
                'first_name' => 'admins',
                'role' => 'admin',
                'last_name' => 'admins',
                'username' => 'admin',
                'birth_date' => fake()->dateTimeBetween('-20 years', '-5 years'),
                'password'=> 'admin123'
            ]
            );
    }
}
