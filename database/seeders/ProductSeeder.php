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
                'name'=>'Leather Belt',
                'price'=>'50',
                'description'=>'French Style',
                'category_id'=>'2',
                'isActive'=>true,
                'details'=>'Full Grain Leather , Brown, Buckle 3 CM , Width 2 CM ,Length 90 CM',
                'image'=>'20210826001304.jpg',
            ],
            [
                'name'=>'Yedda Pearl Earrings',
                'price'=>'20',
                'description'=>'Simple Retro',
                'category_id'=>'2',
                'isActive'=>true,
                'details'=>'14K Gold Plated Copper/Baroque Pearl',
                'image'=>'20210826001837.jpg',
            ],
            [
                'name'=>'Necklace',
                'price'=>'90',
                'description'=>'Adalia Baroque Pearl Necklace',
                'category_id'=>'2',
                'isActive'=>true,
                'details'=>'18K gold plated/Natural pearl Length about 42cm/Pendant about 1.5cm',
                'image'=>'20210826002024.jpg',
            ],
            [
                'name'=>'Myra Simple Earrings',
                'price'=>'190',
                'description'=>'Simple Retro',
                'category_id'=>'2',
                'isActive'=>true,
                'details'=>'18K Gold Plated Copper 0.7cm',
                'image'=>'20210826002323.jpg',

            ],
            [
                'name'=>'Retro Handbag',
                'price'=>'70',
                'description'=>'Simple Retro Handbag',
                'category_id'=>'3',
                'isActive'=>true,
                'details'=>'18K Gold Plated Copper 0.7cm',
                'image'=>'20210826003409.jpg',

            ],
            [
            'name'=>'Retro Handbag',
            'price'=>'85',
            'description'=>'Simple Retro Handbag',
            'category'=>'3',
            'isActive'=>true,
                'details'=>'Length: 29cm/Width: 7cm/Height: 14cm White',
            'image'=>'20210826003533.jpg',

        ],
            [
                'name'=>'Loretta Handbag',
                'price'=>'120',
                'description'=>'Simple Retro',
                'category'=>'3',
                'isActive'=>true,
                'details'=>'Length: 28.5cm, Width: 3.5cm, Height: 14cm Strap Length: 42cm',
                'image'=>'20210826003636.jpg',
            ],
            [
                'name'=>'Retro Handbag',
                'price'=>'99',
                'description'=>'Simple Retro Handbag',
                'category'=>'3',
                'isActive'=>true,
                'details'=>'Length: 29cm/Width: 7cm/Height: 14cm',
                'image'=>'20210826003805.jpg',
            ],
            [
                'name'=>'LEATHER LOAFERS',
                'price'=>'66',
                'description'=>'LEATHER LOAFERS WITH CHAIN',
                'category'=>'4',
                'isActive'=>true,
                'details'=>'Our loafer features a sleek square shape, a platform-like height, and a chain design. Made of top grain leather, this loafter is super comfortable with a cushioned insole.',
                'image'=>'20210826010634.jpg',
            ],
            [
                'name'=>'SQUARED TOE',
                'price'=>'57',
                'description'=>'SQUARED TOE KNITTING PUMPS',
                'category'=>'4',
                'isActive'=>true,
                'details'=>'Square toe with a medium heel height. Finished with polyurethane upper. Knitting detailing to add on the summer fun. Styling silhouette and vents for fit.',
                'image'=>'20210826010821.jpg',
            ],
            [
                'name'=>'POINTED FLAT',
                'price'=>'89',
                'description'=>'POINTED FLAT SANDALS',
                'category'=>'4',
                'isActive'=>true,
                'details'=>'Slip on and ready to go. Made of premiummaterial, our Pointed Flat Sandal features a retro pointed toe, a gathered detail, a comfy flat heel, and a backless shape. Comes in 5 colors. Heel Height: 1.9cm Bottom width: 5.3cm For these item, we recommend selecting a size bigger than your shoe size.',
                'image'=>'20210826011047.jpg',
            ],
            [
                'name'=>'SUN HAT',
                'price'=>'9.99',
                'description'=>'ADJUSTABLE SUN HAT',
                'category'=>'1',
                'isActive'=>true,
                'details'=>'The stitching of linen and vinyl cloth can shade and block ultraviolet rays. The stylish and unique design is a summer match',
                'image'=>'20210826011307.jpg',
            ],
            [
                'name'=>'BUCKET HAT',
                'price'=>'44',
                'description'=>'FEATHER PRINT BUCKET HAT',
                'category'=>'1',
                'isActive'=>true,
                'details'=>'Complete your look with our feather print bucket hat. Designed with 100% quality cotton twill – soft and durable. All-over feather pattern printed in reflective silver-tone and reflective green-tone.',
                'image'=>'20210826012147.jpg',
            ]
        ]);
    }
}
