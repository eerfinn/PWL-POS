{{-- filepath: c:\laragon\www\PWL_POS\resources\views\level\level_ubah.blade.php --}}
@extends('adminlte::page')

@section('title', 'Ubah Level')

@section('content_header')
    <h1>Ubah Level</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Form Ubah Level</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/level/ubah_simpan/' . $data->level_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Kode Level</label>
                            <input type="text" class="form-control" name="level_kode" placeholder="Masukan Kode Level"
                                value="{{ $data->level_kode }}" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Level</label>
                            <input type="text" class="form-control" name="level_nama" placeholder="Masukan Nama Level"
                                value="{{ $data->level_nama }}" required>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                            <a href="{{ url('/level') }}" class="btn btn-secondary">Kembali</a>
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
        console.log('Halaman Ubah Level dimuat');
    </script>
@stop