{{-- filepath: c:\laragon\www\PWL_POS\resources\views\level\level_tambah.blade.php --}}
@extends('adminlte::page')

@section('title', 'Tambah Level')

@section('content_header')
    <h1>Tambah Level</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Level</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    <form action="{{ url('/level/tambah_simpan') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Kode Level</label>
                            <input type="text" class="form-control @error('level_kode') is-invalid @enderror" name="level_kode"
                                placeholder="Masukan Kode Level" value="{{ old('level_kode') }}">
                            @error('level_kode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Level</label>
                            <input type="text" class="form-control @error('level_nama') is-invalid @enderror" name="level_nama"
                                placeholder="Masukan Nama Level" value="{{ old('level_nama') }}">
                            @error('level_nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
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
        console.log('Halaman Tambah Level dimuat');
    </script>
@stop