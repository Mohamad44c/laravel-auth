<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
              DB::table('categories')->insert(
            [
                [
                    'title'=>'Economy',
                    'imgURL'=>'../../assests/economy.jpeg',
                    'clicks'=>0
                ],
                [
                    'title'=>'War',
                    'imgURL'=>'../../assests/war-planes.jpeg',
                    'clicks'=>0
                ],
                [
                    'title'=>'Sports',
                    'imgURL'=>'../../assests/sports.jpeg',
                    'clicks'=>0
                ],
                [
                    'title'=>'Crypto',
                    'imgURL'=>'../../assests/crypto.jpeg',
                    'clicks'=>0
                ],
                [
                    'title'=>'Travel',
                    'imgURL'=>'../../assests/travel.jpeg',
                    'clicks'=>0
                ],
            ]
        );
    }
}
