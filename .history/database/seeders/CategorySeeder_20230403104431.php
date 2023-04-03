<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'キッズファッション',
                'sort_order' => '1'
            ],
            [
                'name' => '出産祝い・ギフト',
                'sort_order' => '２'
            ],
            [
                'name' => 'ベビーカー',
                'sort_order' => '3'
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '靴',
                'sort_order' => '1',
                'primary_category_id' =>1
            ],
            [
                'name' => 'トップス',
                'sort_order' => '２',
                'primary_category_id' =>1
            ],
            [
                'name' => 'バック・ランドセル',
                'sort_order' => '3',
                'primary_category_id' =>1
            ],
            [
                'name' => 'ギフトセット',
                'sort_order' => '4',
                'primary_category_id' =>2
            ],
            [
                'name' => 'おむつケーキ',
                'sort_order' => '4',
                'primary_category_id' =>2
            ],
            [
                'name' => 'ギフトセット',
                'sort_order' => '4',
                'primary_category_id' =>2
            ],
        ]);
    }
}
