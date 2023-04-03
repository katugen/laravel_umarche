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
                'name' => 'キッズファッション',
                'sort_order' => '1',
                'primary_cate'
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
    }
}
