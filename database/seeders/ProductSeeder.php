<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'joystick',
                'price'=>'50',
                'description'=>'For pc and ps4',
                'category_id'=>'1',
                'details'=>'Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Desig',
                'image_large'=>'assets/site/images/product/large-size/3.jpg',
                'image_small'=>'assets/site/images/product/small-size/3.jpg',
            ],
            [
                'name'=>'lg tv 19',
                'price'=>'220',
                'description'=>'Lg tv 22',
                'category_id'=>'1',
                'details'=>'Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Desig',
                'image_large'=>'assets/site/images/product/large-size/4.jpg',
                'image_small'=>'assets/site/images/product/small-size/4.jpg',
            ],
            [
                'name'=>'BT speaker',
                'price'=>'90',
                'description'=>'BlueTooth speaker',
                'category_id'=>'1',
                'details'=>'Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Desig',
                'image_large'=>'assets/site/images/product/large-size/5.jpg',
                'image_small'=>'assets/site/images/product/small-size/5.jpg',
            ],
            [
                'name'=>'Camera',
                'price'=>'190',
                'description'=>'Mi camera',
                'category_id'=>'1',
                'details'=>'Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Desig',
                'image_large'=>'assets/site/images/product/large-size/2.jpg',
                'image_small'=>'assets/site/images/product/small-size/2.jpg',
            ],
            [
                'name'=>'Samsung TV',
                'price'=>'320',
                'description'=>'Samsung TV 32',
                'category_id'=>'1',
                'details'=>'Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Desig',
                'image_large'=>'assets/site/images/product/large-size/1.jpg',
                'image_small'=>'assets/site/images/product/small-size/1.jpg',
            ],
            [
            'name'=>'Head Phone',
            'price'=>'85',
            'description'=>'mi original',
            'category'=>'1',
                'details'=>'Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Desig',
            'image_large'=>'assets/site/images/product/large-size/6.jpg',
            'image_small'=>'assets/site/images/product/small-size/6.jpg',
        ]
        ]);
    }
}
