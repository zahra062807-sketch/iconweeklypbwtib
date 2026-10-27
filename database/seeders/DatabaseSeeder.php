<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Nette\Utils\Random;

use App\model

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 10 data user menggunakan Factory
        // User::factory(10)->create();

        Berita::factory(5)

        // Menambahkan data user
        // DB::table('users')->updateOrInsert(
        //     ['email' => 'sitisri@gmail.com'],
        //     [
        //         'name' => 'Siti Sriyanti',
        //         'password' => Hash::make('siti009'),
        //     ]
        // );

        // // Menambahkan data berita
        // DB::table('beritas')->updateOrInsert(
        //     ['slug' => 'superman-berlari-cepat-asli'],
        //     [
        //         'judul' => 'Superman Berlari Cepat Asli',
        //         'penulis' => 'Arip Sulaiman',
        //         'konten' => 'While running seeds, you may want to prevent models from dispatching events. You may achieve this using the WithoutModelEvents trait. When used, the WithoutModelEvents trait ensures no model events are dispatched, even if additional seed classes are executed via the call method.',
        //     ]
        // );

        // \App\Model\User::factory(10)->create();
        Berita::factory(5)->create();
    }
}
