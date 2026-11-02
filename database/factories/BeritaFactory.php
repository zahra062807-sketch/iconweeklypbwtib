<?php
namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BeritaFactory extends Factory
{
    protected $model = Berita::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');

        $judul = $faker->sentence(mt_rand(5, 10));

        return [
            'judul' => $judul,
            'slug' => Str::slug($judul),
            'penulis' => $faker->name(),
            'konten' => $faker->paragraphs(mt_rand(3, 6), true),
        ];
    }
}