<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([CategorySeeder::class]);

        Magazine::factory(40)->recycle([
            Category::all()
        ])->create();
    }
}
