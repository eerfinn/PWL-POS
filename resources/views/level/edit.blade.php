{{-- filepath: c:\laragon\www\PWL_POS\resources\views\level\edit.blade.php --}}
@extends('layouts.template')

@section('title', 'Edit Level')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('level/' . $level->level_id) }}" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Kode Level</label>
                    <div class="col-11">
                        <input type="text" class="form-control @error('level_kode') is-invalid @enderror" id="level_kode" name="level_kode" value="{{ old('level_kode', $level->level_kode) }}" placeholder="Masukkan Kode Level">
                        @error('level_kode')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nama Level</label>
                    <div class="col-11">
                        <input type="text" class="form-control @error('level_nama') is-invalid @enderror" id="level_nama" name="level_nama" value="{{ old('level_nama', $level->level_nama) }}" placeholder="Masukkan Nama Level">
                        @error('level_nama')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label"></label>
                    <div class="col-11">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a class="btn btn-sm btn-default ml-1" href="{{ url('level') }}">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection