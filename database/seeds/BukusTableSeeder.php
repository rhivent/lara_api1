<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Buku;

class BukusTableSeeder extends Seeder
{
    public function run()
    {
        Buku::truncate();

        $faker = Faker::create();
        for ($i=0; $i < 9 ; $i++) {
          Buku::create([
            'sampul' =>$faker->image($dir = 'public/foto',$width=640, $height=480,'people'),
            'nama' => $faker->realText($maxNbChars = 25, $indexSize = 2),
            'pengarang' => $faker->name,
            'tahun_terbit' => $faker->year,
            'isbn' => $faker->isbn13
          ]);
        }
    }
}
