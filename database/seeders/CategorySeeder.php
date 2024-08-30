<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Cilukba',
            'slug' => 'cilukba',
            'color'=> 'danger'
        ]);

        Category::create([
            'name' => 'Cilukba Junior',
            'slug' => 'cilukba-jr',
            'color'=> 'success'
        ]);
    }
}
