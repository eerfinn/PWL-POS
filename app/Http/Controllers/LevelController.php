<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        $data = LevelModel::all();
        return view('level', ['data' => $data]);
    }

    public function tambah_simpan(Request $request)
    {
        LevelModel::create([
            'level_kode' => $request->level_kode,
            'level_nama' => $request->level_nama,
            'description' => $request->description
        ]);

        return redirect('/level');
    }

    public function ubah($id)
    {
        $level = LevelModel::find($id);
        return view('level_ubah', ['data' => $level]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $level = LevelModel::find($id);
        $level->level_kode = $request->level_kode;
        $level->level_nama = $request->level_nama;
        $level->description = $request->description;
        $level->save();

        return redirect('/level');
    }

    public function hapus($id)
    {
        $level = LevelModel::find($id);
        $level->delete();

        return redirect('/level');
    }
}


