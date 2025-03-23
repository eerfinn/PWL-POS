<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\LevelDataTable;
use App\Http\Requests\StoreLevelRequest;
use Illuminate\Http\RedirectResponse;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.level');
    }

    public function tambah()
    {
        return view('level.level_tambah');
    }

    public function tambah_simpan(StoreLevelRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Data sudah divalidasi oleh StoreLevelRequest
        LevelModel::create([
            'level_kode' => $validated['level_kode'],
            'level_nama' => $validated['level_nama'],
        ]);

        return redirect('/level')->with('success', 'Level berhasil ditambahkan.');
    }

    public function ubah($id)
    {
        $level = LevelModel::find($id);
        return view('level.level_ubah', ['data' => $level]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $level = LevelModel::find($id);
        $level->level_kode = $request->level_kode;
        $level->level_nama = $request->level_nama;
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


