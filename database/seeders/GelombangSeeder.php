<?php

namespace Database\Seeders;

use App\Models\Gelombang;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GelombangSeeder extends Seeder
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
                'gelombang'     => 'Gelombang 1',
                'tgl_mulai'    => Carbon::createFromDate(2021,2,1),
                'tgl_selesai'    => Carbon::createFromDate(2021,4,30),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'gelombang'     => 'Gelombang 2',
                'tgl_mulai'    => Carbon::createFromDate(2021,5,1),
                'tgl_selesai'    => Carbon::createFromDate(2021,6,30),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'gelombang'     => 'Gelombang 3',
                'tgl_mulai'    => Carbon::createFromDate(2021,7,1),
                'tgl_selesai'    => Carbon::createFromDate(2021,9,31),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
        ];

        Gelombang::insert($data);
    }
}
