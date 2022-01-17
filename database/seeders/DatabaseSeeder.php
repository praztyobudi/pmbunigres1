<?php

namespace Database\Seeders;

use App\Models\Biaya;
use App\Models\Gelombang;
use App\Models\JalurMasuk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ToDo: Tambahkan semua class seeder ke fungsi di bawah ini
        $this->call([
            GelombangSeeder::class,
            JenjangSeeder::class,
            PermissionSeeder::class,
            FakultasSeeder::class,
            ProdiSeeder::class,
            JalurMasukSeeder::class,
            JamMasukSeeder::class,
            AdminSeeder::class,
            KelasSeeder::class,
            JamMasukKelasSeeder::class,
            BiayaSeeder::class,
        ]);
    }
}
