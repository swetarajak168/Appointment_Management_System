<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $modules = [
            'Home',
            'Department',
            'Log In'
           
        ];
        $links = [
            'home',
            'departmentshow',
            'login',
        ];

        foreach ($modules as $key => $module) {
            Module::create([
                'name' => $module,
                'link' => $links[$key],
            ]);
        }
    }
    
}
