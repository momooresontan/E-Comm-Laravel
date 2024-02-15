<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Oppo mobile',
                'price' => '300',
                'category' => 'phones',
                'description' => 'A smartphone with 8gb ram and much more',
                'gallery' => 'https://unsplash.com/photos/person-holding-black-android-smartphone-wK-elt11pF0',
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '400',
                'category' => 'television',
                'description' => 'A 43 inch smart television',
                'gallery' => 'https://unsplash.com/photos/flat-screen-tv-ngMtsE5r9eI',
            ],
            [
                'name' => 'Sony TV',
                'price' => '300',
                'category' => 'televsion',
                'description' => 'A tv with quality display pixels and much more',
                'gallery' => 'https://unsplash.com/photos/flat-screen-tv-turned-on-w4znns7NTA0',
            ],
            [
                'name' => 'LG fridge',
                'price' => '200',
                'category' => 'fridge',
                'description' => 'A fridge and much more',
                'gallery' => 'https://unsplash.com/photos/blue-refrigerator-beside-green-leafed-plant-Eb6hMEhGlKY',
            ],
        ]);
    }
}
