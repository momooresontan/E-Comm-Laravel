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
                'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png',
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '400',
                'category' => 'television',
                'description' => 'A 43 inch smart television',
                'gallery' => 'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg',
            ],
            [
                'name' => 'Sony TV',
                'price' => '300',
                'category' => 'televsion',
                'description' => 'A tv with quality display pixels and much more',
                'gallery' => 'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png',
            ],
            [
                'name' => 'LG fridge',
                'price' => '200',
                'category' => 'fridge',
                'description' => 'A fridge and much more',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU',
            ],
        ]);
    }
}
