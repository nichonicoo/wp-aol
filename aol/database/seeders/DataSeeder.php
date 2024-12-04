<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // $locs = [
    //     'Jakarta', 'Bali', 'Sumatra', 'Kalimantan', 'Papua', 'Surabaya', 'Aceh'
    // ];

    // $tingkats = [
    //     'Sangat Susah', 'Susah', 'Normal' , 'Gampang'
    // ];

    // $stats = [
    //     'Sudah Selesai', 'Sedang Dikerjakan', 'Sedang Di Diskusikan', 'Belum Dikerjakan'
    // ];

    // $ph = [
    //     'a.jpeg', 'b.jpeg', 'c.jpeg', 'd.jpeg', 'e.jpeg', 'f.jpeg', 'g.jpeg', 'h.jpeg', 'i.jpeg'
    // ];

    // for ($i = 0; $i < 25; $i++) {
    //     DB::table('datas')->insert([
    //         'Title' => fake()->text(8),
    //         'Description' => fake()->text(100),
    //         'Location' => fake()->randomElement($locs),
    //         'Tingkat_Kesulitan' => fake()->randomElement($tingkats),
    //         'Status' => fake()->randomElement($stats), // Ensure Status is being inserted here
    //         'users_id' => fake()->numberBetween(1, 10),
    //         'photo_url' => fake()->randomElement($ph),
    //     ]);
    // }
}

}
