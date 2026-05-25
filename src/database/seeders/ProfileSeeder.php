<?php

namespace Database\Seeders;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Profile::create([
            'label' => 'Mahasiswa Sistem Informasi',

            'name' => 'Isad',

            'description' => 'Saya seorang mahasiswa Sistem Informasi yang tertarik pada web development, backend system, dan pengembangan aplikasi berbasis Laravel.',

            'photo' => 'assets/img/profile.jpeg',

            'stat_project' => '10+',

            'stat_major' => 'SI',

            'stat_university' => 'Esa Unggul',
        ]);
    }
}
