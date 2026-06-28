<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;

class CatalogTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'catalog_name' => 'Book',
                'description'  => 'Standard printed or bound literary, fictional, or non-fiction works.',
                'created_at'   => $now,
                'updated_at'   => $now
            ],
            [
                'catalog_name' => 'Magazine',
                'description'  => 'Periodic publications containing articles, stories, photographs, and illustrations for general interest.',
                'created_at'   => $now,
                'updated_at'   => $now
            ],
            [
                'catalog_name' => 'Journal',
                'description'  => 'Scholarly or professional publications containing peer-reviewed articles and academic research.',
                'created_at'   => $now,
                'updated_at'   => $now
            ],
            [
                'catalog_name' => 'Newspaper',
                'description'  => 'Daily or weekly publications containing current news, feature articles, and public announcements.',
                'created_at'   => $now,
                'updated_at'   => $now
            ],
            [
                'catalog_name' => 'E-Book',
                'description'  => 'Digital versions of books designed to be read on computers, tablets, or e-readers.',
                'created_at'   => $now,
                'updated_at'   => $now
            ],
            [
                'catalog_name' => 'Thesis / Dissertation',
                'description'  => 'Extensive academic research papers submitted by students for master\'s or doctoral degrees.',
                'created_at'   => $now,
                'updated_at'   => $now
            ],
            [
                'catalog_name' => 'Multimedia (CD/DVD)',
                'description'  => 'Audio and video resources, including movies, documentaries, software, and audiobooks.',
                'created_at'   => $now,
                'updated_at'   => $now
            ],
            [
                'catalog_name' => 'Reference Material',
                'description'  => 'Resources used to find quick facts or background information, such as encyclopedias, dictionaries, and atlases. Usually not for checkout.',
                'created_at'   => $now,
                'updated_at'   => $now
            ]
        ];

        DB::table('catalog_types')->insert($data);
    }
}
