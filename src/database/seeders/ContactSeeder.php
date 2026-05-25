<?php

namespace Database\Seeders;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'Raihan Isad',
            'email' => 'raihanisad2007@gmail.com',
            'subject' => 'Pertanyaan tentang Proyek',
            'message' => 'Halo, saya ingin bertanya tentang proyek yang sedang dikerjakan',
        ]);
    }
}
