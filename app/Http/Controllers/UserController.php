<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\DataTables\UserDataTable;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.user');
    }

    public function tambah()
    {
        return view('user.user_tambah');
    }

    public function tambah_simpan(StoreUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Data sudah divalidasi oleh StoreUserRequest
        (UserModel::create([
            'username' => $validated['username'],
            'nama' => $validated['nama'],
            'password' => Hash::make($validated['password']),
            'level_id' => $validated['level_id'],
        ]));

        return redirect('/user')->with('success', 'User berhasil ditambahkan.');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user.user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
