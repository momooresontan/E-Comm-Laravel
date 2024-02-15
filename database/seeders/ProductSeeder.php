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
                'category' => 'Television',
                'description' => 'A 43 inch smart television',
                'gallery' => '',
            ],
            [
                'name' => 'LG mobile',
                'price' => '200',
                'category' => 'phones',
                'description' => 'A smartphone with 4gb ram and much more',
                'gallery' => 'https://unsplash.com/photos/space-gray-iphone-6-on-white-textile-8l9VxXI28tY',
            ],
            [
                'name' => 'LG mobile',
                'price' => '200',
                'category' => 'phones',
                'description' => 'A smartphone with 4gb ram and much more',
                'gallery' => 'https://unsplash.com/photos/space-gray-iphone-6-on-white-textile-8l9VxXI28tY',
            ],
        ]);
    }
}
