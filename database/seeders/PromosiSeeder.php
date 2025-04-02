<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromosiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promosi')->insert([
            'title' => 'Uniqlo Sale',
            'description' => 'Special deal on selected items at Uniqlo.',
            'image' => 'storage\promosi\uniqlo.jpg',
        ]);

        DB::table('promosi')->insert([
            'title' => 'Zara Sale',
            'description' => 'Get up to 50% off on selected items at Zara.',
            'image' => 'storage\promosi\zara.jpg',
        ]);

        DB::table('promosi')->insert([
            'title' => 'Pull & Bear Sale',
            'description' => 'Exclusive discounts on Pull & Bear  products.',
            'image' => 'storage\promosi\pullandbear.jpg',
        ]);

        DB::table('promosi')->insert([
            'title' => 'H&M Sale',
            'description' => 'Get up to 70% off on selected items at H&M.',
            'image' => 'storage\promosi\hnm.jpg',
        ]);

        DB::table('promosi')->insert([
            'title' => 'Nike Sale',
            'description' => 'Exclusive discounts on Nike products.',
            'image' => 'storage\promosi\nike.jpg',
        ]);

        DB::table('promosi')->insert([
            'title' => 'Adidas Sale',
            'description' => 'Get up to 30% off on selected items at Adidas.',
            'image' => 'storage\promosi\adidas.png',
        ]);

    }
}
