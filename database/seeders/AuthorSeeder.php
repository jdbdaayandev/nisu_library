<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $authors = [
            [
                'author_name' => 'Jose Rizal',
                'bio' => 'The national hero of the Philippines, a polymath, and the author of the monumental novels Noli Me Tángere and El Filibusterismo.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'author_name' => 'George Orwell',
                'bio' => 'English novelist, essayist, and critic famous for his dystopian works, most notably Animal Farm and Nineteen Eighty-Four.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'author_name' => 'Nick Joaquin',
                'bio' => 'Filipino writer and journalist best known for his short stories and novels in the English language. He was conferred the title of National Artist of the Philippines for Literature.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'author_name' => 'F. Scott Fitzgerald',
                'bio' => 'An American novelist and essayist, widely regarded as one of the greatest American writers of the 20th century, famous for writing The Great Gatsby.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'author_name' => 'Bob Ong',
                'bio' => 'The pseudonym of a contemporary Filipino author known for using conversational Filipino to create humorous and reflective depictions of Philippine life.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'author_name' => 'J.K. Rowling',
                'bio' => 'British author best known for writing the Harry Potter fantasy series, one of the most popular and successful book franchises in history.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'author_name' => 'Stephen Hawking',
                'bio' => 'English theoretical physicist, cosmologist, and author who wrote A Brief History of Time, making complex space-time theories accessible to the general public.',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ];

        DB::table('authors')->insert($authors);
    }
}
