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
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'name' => 'アコースティックギター',
                'description' => '素晴らしくいい音を奏でること間違いなしの商品',
                'image' => '/images/1.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'シンバル',
                'description' => '素晴らしくいい音を奏でること間違いなしの商品',
                'image' => '/images/2.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'ストラトキャスター',
                'description' => '素晴らしくいい音を奏でること間違いなしの商品',
                'image' => '/images/3.jpg',
                'price' =>'6800'
            ],
            [
                'name' => 'フルート',
                'description' => '素晴らしくいい音を奏でること間違いなしの商品',
                'image' => '/images/4.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'レスポールギター',
                'description' => '素晴らしくいい音を奏でること間違いなしの商品',
                'image' => '/images/5.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'ハーモニカ',
                'description' => '素晴らしくいい音を奏でること間違いなしの商品',
                'image' => '/images/6.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'ドラム',
                'description' => '素晴らしくいい音を奏でること間違いなしの商品',
                'image' => '/images/7.jpg',
                'price' =>'6800'
            ],
            [
                'name' => 'ピアノ',
                'description' => '素晴らしくいい音を奏でること間違いなしの商品',
                'image' => '/images/8.jpg',
                'price' =>'7800'
            ],
            [
                'name' => 'オカリナ',
                'description' => '素晴らしくいい音を奏でること間違いなしの商品',
                'image' => '/images/9.jpg',
                'price' =>'4500'
            ],
        ]);
    }
}
