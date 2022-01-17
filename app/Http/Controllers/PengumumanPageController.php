<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengumumanPageController extends Controller
{

    public function index()
    {
        $data = Pengumuman::where('deskripsi', '!=', '#brochure#')->limit(10)->get()->toArray();

        return view('aak.pengumuman_aak',compact('data'));
    }
}
