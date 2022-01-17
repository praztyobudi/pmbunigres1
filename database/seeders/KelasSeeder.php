<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ToDo: Modifikasi variable data sesuai dengan kebutuhan model Kelas
        $data = [
            // Analis Kesehatan
            [ // #1
                'prodi_id' => 1,
                'kelas' => 'Kelas A',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
                'tes_kesehatan' => 1,
                'keterangan_tes_kesehatan' => '+62 856-4976-9693 (Ibu Dani)'
            ]
        ];

        Kelas::insert($data);
    }
}
