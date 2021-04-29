<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'jenjang_id' => 1,
                'fakultas_id' => 1,
                'kode_prodi_nim' => '01',
                'kode_prodi_siakad' => '13453',
                'nama' => 'Analis Kesehatan',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        ];

        Prodi::insert($data);
    }
}
