<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as FakerFactory;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = FakerFactory::create();

        // Mengisi tabel "books" dengan data dummy
        for ($i = 0; $i < 10; $i++) { // Ubah angka 10 sesuai dengan jumlah data yang diinginkan
            Book::create([
                'isbn' => $faker->isbn13,
                'judul' => $faker->sentence,
                'halaman' => $faker->numberBetween(100, 500),
                'kategori' => $faker->word,
                'penerbit' => $faker->company,
            ]);
        }
    }
}
