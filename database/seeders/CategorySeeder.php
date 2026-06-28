<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $now = Carbon::now();

        $categories = [
            [
                'category_name' => 'Fiction',
                'description' => 'Literature in the form of prose, especially novels, that describes imaginary events and people.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Non-Fiction',
                'description' => 'Prose writing that is based on facts, real events, and real people, such as biography or history.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Sci-Fi & Fantasy',
                'description' => 'Speculative fiction including futuristic technology, space exploration, and magical elements.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Biography & Autobiography',
                'description' => 'Detailed descriptions of a person\'s life written by themselves or someone else.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Periodicals & Magazines',
                'description' => 'Magazines, newspapers, and journals published at regular intervals.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
