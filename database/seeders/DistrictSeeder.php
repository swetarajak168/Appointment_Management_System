<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $province_1 = [
            [
                'province_id' => 1,
                'name' => 'Bhojpur',
             
            ],
            [
                'province_id' => 1,
                'name' => 'Dhankuta',
            ],
            [
                'province_id' => 1,
                'name' => 'Ilam',
                
            ],
            [
                'province_id' => 1,
                'name' => 'Jhapa',
                
            ],
            [
                'province_id' => 1,
                'name' => 'Khotang',
                
            ],
            [
                'province_id' => 1,
                'name' => 'Morang',
               
            ],
            [
                'province_id' => 1,
                'name' => 'Okhaldhunga',
                
            ],
            [
                'province_id' => 1,
                'name' => 'Panchthar',
            ],
            [
                'province_id' => 1,
                'name' => 'Sankhuwasabha',
            ],
            [
                'province_id' => 1,
                'name' => 'Solukhumbu',
            ],
            [
                'province_id' => 1,
                'name' => 'Sunsari',
            ],
            [
                'province_id' => 1,
                'name' => 'Taplejung',
            ],
            [
                'province_id' => 1,
                'name' => 'Terhathum',
            ],
            [
                'province_id' => 1,
                'name' => 'Udayapur',
            ],
        ];

        $province_2 = [
            [
                'province_id' => 2,
                'name' => 'Parsa',
            ],
            [
                'province_id' => 2,
                'name' => 'Bara',
            ],
            [
                'province_id' => 2,
                'name' => 'Rautahat',
            ],
            [
                'province_id' => 2,
                'name' => 'Sarlahi',
            ],
            [
                'province_id' => 2,
                'name' => 'Dhanusha',
            ],
            [
                'province_id' => 2,
                'name' => 'Siraha',
            ],
            [
                'province_id' => 2,
                'name' => 'Mahottari',
            ],
            [
                'province_id' => 2,
                'name' => 'Saptari',
            ],
        ];

        $province_3 = [
            [
                'province_id' => 3,
                'name' => 'Sindhuli',
            ],
            [
                'province_id' => 3,
                'name' => 'Ramechhap',
            ],
            [
                'province_id' => 3,
                'name' => 'Dolakha',
            ],
            [
                'province_id' => 3,
                'name' => 'Bhaktapur',
            ],
            [
                'province_id' => 3,
                'name' => 'Dhading',
            ],
            [
                'province_id' => 3,
                'name' => 'Kathmandu',
            ],
            [
                'province_id' => 3,
                'name' => 'Kavrepalanchok',
            ],
            [
                'province_id' => 3,
                'name' => 'Lalitpur',
            ],
            [
                'province_id' => 3,
                'name' => 'Nuwakot',
            ],
            [
                'province_id' => 3,
                'name' => 'Rasuwa',
            ],
            [
                'province_id' => 3,
                'name' => 'Sindhupalchok',
            ],
            [
                'province_id' => 3,
                'name' => 'Chitwan',
            ],
            [
                'province_id' => 3,
                'name' => 'Makawanpur',
            ],
        ];

        $province_4 = [
            [
                'province_id' => 4,
                'name' => 'Baglung',
            ],
            [
                'province_id' => 4,
                'name' => 'Gorkha',
            ],
            [
                'province_id' => 4,
                'name' => 'Kaski',
            ],
            [
                'province_id' => 4,
                'name' => 'Lamjung',
            ],
            [
                'province_id' => 4,
                'name' => 'Manang',
            ],
            [
                'province_id' => 4,
                'name' => 'Mustang',
            ],
            [
                'province_id' => 4,
                'name' => 'Myagdi',
            ],
            [
                'province_id' => 4,
                'name' => 'Nawalpur',
            ],
            [
                'province_id' => 4,
                'name' => 'Parbat',
            ],
            [
                'province_id' => 4,
                'name' => 'Syangja',
            ],
            [
                'province_id' => 4,
                'name' => 'Tanahu',
            ],
        ];

        $province_5 = [
            [
                'province_id' => 5,
                'name' => 'Kapilvastu',
            ],
            [
                'province_id' => 5,
                'name' => 'Parasi',
            ],
            [
                'province_id' => 5,
                'name' => 'Rupandehi',
            ],
            [
                'province_id' => 5,
                'name' => 'Arghakhanchi',
            ],
            [
                'province_id' => 5,
                'name' => 'Gulmi',
            ],
            [
                'province_id' => 5,
                'name' => 'Palpa',
            ],
            [
                'province_id' => 5,
                'name' => 'Dang',
            ],
            [
                'province_id' => 5,
                'name' => 'Pyuthan',
            ],
            [
                'province_id' => 5,
                'name' => 'Rolpa',
            ],
            [
                'province_id' => 5,
                'name' => 'Eastern Rukum',
            ],
            [
                'province_id' => 5,
                'name' => 'Banke',
            ],
            [
                'province_id' => 5,
                'name' => 'Bardiya',
            ],
        ];

        $province_6 = [
            [
                'province_id' => 6,
                'name' => 'Western Rukum',
            ],
            [
                'province_id' => 6,
                'name' => 'Salyan',
            ],
            [
                'province_id' => 6,
                'name' => 'Dolpa',
            ],
            [
                'province_id' => 6,
                'name' => 'Humla',
            ],
            [
                'province_id' => 6,
                'name' => 'Jumla',
            ],
            [
                'province_id' => 6,
                'name' => 'Kalikot',
            ],
            [
                'province_id' => 6,
                'name' => 'Mugu',
            ],
            [
                'province_id' => 6,
                'name' => 'Surkhet',
            ],
            [
                'province_id' => 6,
                'name' => 'Dailekh',
            ],
            [
                'province_id' => 6,
                'name' => 'Jajarkot',
            ],
        ];

        $province_7 = [
            [
                'province_id' => 7,
                'name' => 'Kailali',
            ],
            [
                'province_id' => 7,
                'name' => 'Achham',
            ],
            [
                'province_id' => 7,
                'name' => 'Doti',
            ],
            [
                'province_id' => 7,
                'name' => 'Bajhang',
            ],
            [
                'province_id' => 7,
                'name' => 'Bajura',
            ],
            [
                'province_id' => 7,
                'name' => 'Kanchanpur',
            ],
            [
                'province_id' => 7,
                'name' => 'Dadeldhura',
            ],
            [
                'province_id' => 7,
                'name' => 'Baitadi',
            ],
            [
                'province_id' => 7,
                'name' => 'Darchula',
            ],
        ];

        $districts = array_merge(
            $province_1,
            $province_2,
            $province_3,
            $province_4,
            $province_5,
            $province_6,
            $province_7,
        );
        District::insert($districts);

    }
}
