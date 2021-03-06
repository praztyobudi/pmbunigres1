<?php

namespace Database\Seeders;

use App\Models\Jenjang;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class JenjangSeeder extends Seeder
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
                'nama'          => 'Diploma 3',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        ];

        Jenjang::insert($data);
    }
}
