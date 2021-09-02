<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gelombang;
use Carbon\Carbon;

class RegisController extends Controller
{
    public function get_gelombang(){
        $data = Gelombang::whereYear('tgl_mulai', Carbon::now()->year)->get();

        return $data;
    }
    public function get_prodi(){
        $data = DB::select('SELECT p.id,p.nama AS prodi,j.nama AS jenjang,f.fakultas
                            FROM prodi p
                            LEFT OUTER JOIN jenjang j ON p.jenjang_id = j.id
                            LEFT OUTER JOIN fakultas f ON p.fakultas_id = f.id
                            ORDER BY p.id');
        return $data;
    }

    public function get_jam_masuk($id){
        $data = DB::select('SELECT k.id,j.jam_masuk_id,m.jam_masuk,k.kelas,k.prodi_id,p.nama
                            FROM jam_masuk_kelas j
                            LEFT OUTER JOIN kelas k ON j.kelas_id = k.id
                            LEFT OUTER JOIN jam_masuks m ON j.jam_masuk_id = m.id
                            LEFT OUTER JOIN prodi p ON k.prodi_id = p.id
                            where p.id = ?', [$id]);
        return $data;
    }

    public function get_jalur_masuk($id){
        $gelombang = $gelombang = Gelombang::where([
            ['tgl_mulai', '<=', Carbon::today()],
            ['tgl_selesai', '>=', Carbon::today()]
        ])->first();

        try {
            return (!is_null($gelombang)) ? DB::select('SELECT b.gelombang_id,b.kelas_id,b.jalur_masuk_id,j.jalur_masuk
                            FROM jalur_masuk j
                            LEFT OUTER JOIN biayas b ON b.jalur_masuk_id = j.id
                            WHERE b.kelas_id = ? and b.gelombang_id = ?
                            GROUP BY j.id', [$id,$gelombang->id]) : null;
        }catch (\Exception $e){
            return response()->json($e->getMessage(), 200);
        }
    }
}
