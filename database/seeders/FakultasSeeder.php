<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
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
                'fakultas' => 'Analis Kesehatan',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        ];

        Fakultas::insert($data);
    }
}
