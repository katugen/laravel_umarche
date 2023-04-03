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
                'name' => '出産祝い・ぎふ',
                'sort_order' => '1'
            ],
            [
                'name' => 'キッズファッション',
                'sort_order' => '1'
            ],
        ]);
    }
}
