<?php

namespace Database\Seeders;
use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::truncate();

        Portfolio::create([
            'title' => 'Sistem Informasi Penyewaan Lapangan Padel',
            'category' => 'Laravel',
            'description' => 'Aplikasi web untuk mengelola penyewaan lapangan padel, mulai dari booking, manajemen jadwal, data pelanggan, sampai status pemesanan.',
            'tech_stack' => 'Laravel, Filament v3, MariaDB',
            'image' => 'assets/img/erd.jpg',
            'url' => 'https://github.com/kill4enemy',
        ]);

        Portfolio::create([
            'title' => 'Dashboard Admin Filament',
            'category' => 'Admin Panel',
            'description' => 'Panel admin berbasis Filament untuk mengelola data project, portfolio, profile, contact, dan progress laporan secara dinamis.',
            'tech_stack' => 'Filament v3, Livewire, Laravel',
            'image' => 'assets/img/admin.png',
            'url' => null,
        ]);

        Portfolio::create([
            'title' => 'Java App Development',
            'category' => 'Java',
            'description' => 'Project pengembangan aplikasi berbasis Java untuk kebutuhan tugas kuliah dan latihan konsep pemrograman berorientasi objek.',
            'tech_stack' => 'Java, OOP, Desktop App',
            'image' => 'assets/img/typing.webp',
            'url' => null,
        ]);
    }
}
