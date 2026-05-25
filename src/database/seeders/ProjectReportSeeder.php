<?php

namespace Database\Seeders;
use App\Models\ProjectReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectReport::truncate();

        ProjectReport::create([
            'type' => 'main',
            'title' => 'Sistem Informasi Penyewaan Lapangan Padel',
            'description' => 'Project utama berbasis Laravel, Filament v3, Livewire, Blade, MariaDB, dan Docker untuk mengelola penyewaan lapangan padel.',
            'status' => 'in_progress',
            'progress_percentage' => 35,
        ]);

        ProjectReport::create([
            'type' => 'task',
            'title' => 'Perancangan Database dan ERD',
            'description' => 'Perancangan relasi tabel users, courts, dan bookings untuk mendukung sistem penyewaan lapangan padel.',
            'status' => 'done',
            'progress_percentage' => 100,
        ]);

        ProjectReport::create([
            'type' => 'task',
            'title' => 'Integrasi Panel Admin Filament',
            'description' => 'Pembuatan panel admin menggunakan Filament v3 untuk mengelola data project secara dinamis.',
            'status' => 'in_progress',
            'progress_percentage' => 80,
        ]);

        ProjectReport::create([
            'type' => 'task',
            'title' => 'Implementasi Sistem Booking',
            'description' => 'Pengembangan fitur booking lapangan secara online dengan validasi jadwal dan pengelolaan transaksi penyewaan.',
            'status' => 'in_progress',
            'progress_percentage' => 35,
        ]);
    }
}
