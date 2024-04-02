<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class No4Controller extends Controller
{
    public function getDataGuru()
    {
        $getGuru =  Guru::all();
        if (!$getGuru) {
            return response()->json([
                'status' => true,
                'message' => 'Data Belum diisi'
            ], 200);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Sukses menampilkan data',
                $getGuru
            ], 200);
        }
    }

    public function postDataGuru(Request $request)
    {
        $postGuru = new Guru;
        $postGuru->nama = $request->nama;
        $postGuru->mapel = $request->mapel;
        $postGuru->save();

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil disimpan',
            $postGuru
        ], 201);
    }

    public function getDataGuruById($id)
    {
        $getGuru = Guru::find($id);
        if (!$getGuru) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        } elseif ($getGuru) {
            return response()->json(['status' => true, $getGuru], 200);
        }
    }

    public function putDataGuru(Request $request, $id)
    {
        if (Guru::where('id', $id)->exists()) {
            $putGuru = Guru::find($id);
            $putGuru->nama = is_null($request->nama) ? $putGuru->nama : $request->nama;
            $putGuru->mapel = is_null($request->mapel) ? $putGuru->mapel : $request->mapel;
            $putGuru->save();

            return response()->json([
                'status' => true,
                'message' => 'Data berhasil di update',
                $putGuru
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    }

    public function deleteDataGuru($id)
    {
        if (Guru::where('id', $id)->exists()) {
            $delGuru = Guru::find($id);
            $delGuru->delete();

            return response()->json([
                'status' => true,
                'message' => 'Data berhasil dihapus'
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    }
}
