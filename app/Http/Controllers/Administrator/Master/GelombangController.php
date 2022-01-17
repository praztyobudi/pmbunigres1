<?php

namespace App\Http\Controllers\Administrator\Master;

use App\Http\Controllers\Controller;
use App\Models\Gelombang;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Gelombang::all();

        return response()->view('administrator.master.gelombang', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $this->validate($request, [
            'id' => 'nullable',
            'phase' => 'required|string',
            'startDate' => 'required|date',
            'endDate' => 'required|date'
        ]);

        try {
            Gelombang::updateOrCreate(
                [
                    'id' => $input['id'],
                ],
                [
                    'gelombang' => $input['phase'],
                    'tgl_mulai' => $input['startDate'],
                    'tgl_selesai' => $input['endDate']
                ]);

            $res = [
                'status' => 'success',
                'message' => 'Data gelombang berhasil dimasukkan'
            ];
        } catch (Exception $e){
            $res = [
                'status' => 'danger',
                'message' => 'Data gelombang gagal dimasukkan'
            ];
        }

        return response()->redirectToRoute('administrator.master.gelombang.index')->with($res);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $data = Gelombang::find($id);

        if(is_null($data)) return response()->redirectToRoute('administrator.master.gelombang.index')->with([
            'status' => 'danger',
            'message' => 'Data gelombang tidak ditemukan'
        ]);

        if(!is_null($data->user)) return response()->redirectToRoute('administrator.master.gelombang.index')->with([
            'status' => 'danger',
            'message' => 'Tidak dapat menghapus gelombang yang memiliki pendaftar'
        ]);

        try {
            $data->delete();

            $res = [
                'status' => 'success',
                'message' => 'Data gelombang berhasil dihapus'
            ];
        } catch (\Exception $e){
            $res = [
                'status' => 'danger',
                'message' => 'Data gelombang gagal dihapus'
            ];
        }

        return response()->redirectToRoute('administrator.master.gelombang.index')->with($res);
    }

    public function getGelombang(){
        $data = Gelombang::all();

        return response($data, 200);
    }

    public function getGelombangProperty($id){
        $data = Gelombang::findOrFail($id);

        return response($data, 200);
    }
}
