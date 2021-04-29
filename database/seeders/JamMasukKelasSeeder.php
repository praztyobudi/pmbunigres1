<?php

namespace Database\Seeders;

use App\Models\JamMasukKelas;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class JamMasukKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ToDo: Tambahkan jam masuk untuk Profesi NERS
        $data = [
            // Analis Kesehatan A
            [ // #1
                'kelas_id' => 1,
                'jam_masuk_id' => 1, // pagi
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        ];
        JamMasukKelas::insert($data);
    }
}
