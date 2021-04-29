<?php

namespace Database\Seeders;

use App\Models\Biaya;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BiayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Biaya Gelombang 1 Berhijab
            [
                'gelombang_id' => 1,
                'jalur_masuk_id' => 1,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1500000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1800000,
                'total_daftar_ulang' => 4645000,
                'hijab' => true,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 1 Non-Hijab
            [
                'gelombang_id' => 1,
                'jalur_masuk_id' => 1,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1500000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1750000,
                'total_daftar_ulang' => 4595000,
                'hijab' => false,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 1 Berhijab
            [
                'gelombang_id' => 1,
                'jalur_masuk_id' => 2,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1500000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1800000,
                'total_daftar_ulang' => 4645000,
                'hijab' => true,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 1 Non-Hijab
            [
                'gelombang_id' => 1,
                'jalur_masuk_id' => 2,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1500000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1750000,
                'total_daftar_ulang' => 4595000,
                'hijab' => false,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 2 Berhijab
            [
                'gelombang_id' => 2,
                'jalur_masuk_id' => 1,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1625000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1800000,
                'total_daftar_ulang' => 4770000,
                'hijab' => true,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 2 Non-Hijab
            [
                'gelombang_id' => 2,
                'jalur_masuk_id' => 1,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1625000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1750000,
                'total_daftar_ulang' => 4720000,
                'hijab' => false,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 2 Berhijab
            [
                'gelombang_id' => 2,
                'jalur_masuk_id' => 2,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1625000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1800000,
                'total_daftar_ulang' => 4770000,
                'hijab' => true,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 2 Non-Hijab
            [
                'gelombang_id' => 2,
                'jalur_masuk_id' => 2,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1625000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1750000,
                'total_daftar_ulang' => 4720000,
                'hijab' => false,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 3 Berhijab
            [
                'gelombang_id' => 3,
                'jalur_masuk_id' => 1,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1750000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1800000,
                'total_daftar_ulang' => 4895000,
                'hijab' => true,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 3 Non-Hijab
            [
                'gelombang_id' => 3,
                'jalur_masuk_id' => 1,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1750000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1750000,
                'total_daftar_ulang' => 4845000,
                'hijab' => false,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 3 Berhijab
            [
                'gelombang_id' => 3,
                'jalur_masuk_id' => 2,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1750000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1800000,
                'total_daftar_ulang' => 4895000,
                'hijab' => true,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            // Biaya Gelombang 3 Non-Hijab
            [
                'gelombang_id' => 3,
                'jalur_masuk_id' => 2,
                'kelas_id' => 1,
                'biaya_registrasi' => 350000,
                'dana_pengembangan' => 1750000,
                'dana_kemahasiswaan' => 1075000,
                'buku_pedoman_akademik' => 160000,
                'buku_pedoman_kompetensi' => 110000,
                'seragam' => 1750000,
                'total_daftar_ulang' => 4845000,
                'hijab' => false,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
        ];

        Biaya::insert($data);
    }
}
