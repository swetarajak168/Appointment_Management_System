<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $provinces = [
            [
                'province_name' => 'Province No. 1',
                'capital' => 'Biratnagar',
                'no_of_districts'  => 14,
            ],
            [
                'province_name' => 'Province No. 2',
                'capital' => 'Janakpur',
                'no_of_districts'  => 8,
            ],
            [
                'province_name' => 'Bagmati ',
                'capital' => 'Hetauda',
                'no_of_districts'  => 13,
            ],
            [
                'province_name' => 'Gandaki',
                'capital' => 'Pokhara',
                'no_of_districts'  => 11,
            ],
            [
                'province_name' => 'Lumbini',
                'capital' => 'Butwal',
                'no_of_districts'  => 12,
            ],
            [
                'province_name' => 'Karnali',
                'capital' => 'Birendranagar',
                'no_of_districts'  => 10,
            ],
            [
                'province_name' => 'Sudurpaschim',
                'capital' => 'Godawari',
                'no_of_districts'  => 9,
            ],
        ];
            Province::insert($provinces);
    }
}
