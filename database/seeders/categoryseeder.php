<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoryseeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['category_name' => 'makanan', 'description' => 'kategori makanan'],
            ['category_name' => 'minuman', 'description' => 'kategori minuman'],
        ];
        DB::table('categories')->insert($categories);
    }
}
