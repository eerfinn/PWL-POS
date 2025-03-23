@extends('adminlte::page')

@section('title', 'Ubah User')

@section('content_header')
    <h1>Ubah User</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Form Ubah User</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/user/ubah_simpan/' . $data->user_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukan Username"
                                value="{{ $data->username }}" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama"
                                value="{{ $data->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                        </div>
                        <div class="form-group">
                            <label>Level ID</label>
                            <input type="number" class="form-control" name="level_id" placeholder="Masukan ID Level"
                                value="{{ $data->level_id }}" required>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                            <a href="{{ url('/user') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Halaman Ubah User dimuat');
    </script>
@stop
