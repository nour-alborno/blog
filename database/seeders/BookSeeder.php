<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            [
                'title' => 'Book 1',
                'author' => 'Author 1',
                'year' => '2021',
                'book' => 'path/to/book1.pdf',
                'details' => 'Book details 1',
                'price' => 9.99,
                'category_id' => 1,
            ],
            [
                'title' => 'Book 2',
                'author' => 'Author 2',
                'year' => '2022',
                'book' => 'path/to/book2.pdf',
                'details' => 'Book details 2',
                'price' => 14.99,
                'category_id' => 2,
            ],
             [
                'title' => 'Book 3',
                'author' => 'Author 3',
                'year' => '2022',
                'book' => 'path/to/book3.pdf',
                'details' => 'Book details 3',
                'price' => 14.99,
                'category_id' => 2,
            ],
             [
                'title' => 'Book 4',
                'author' => 'Author 4',
                'year' => '2022',
                'book' => 'path/to/book4.pdf',
                'details' => 'Book details 4',
                'price' => 14.99,
                'category_id' => 2,
            ],
             [
                'title' => 'Book 5',
                'author' => 'Author 5',
                'year' => '2022',
                'book' => 'path/to/book5.pdf',
                'details' => 'Book details 5',
                'price' => 14.99,
                'category_id' => 4,
            ],
            // Add more book data as needed
        ];

        foreach ($books as $bookData) {
            Book::create($bookData);
        }
    }
}
