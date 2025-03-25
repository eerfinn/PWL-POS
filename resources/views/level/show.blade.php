{{-- filepath: c:\laragon\www\PWL_POS\resources\views\level\show.blade.php --}}
@extends('layouts.template')

@section('title', 'Detail Level')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Kode Level</label>
                <div class="col-11">
                    <input type="text" class="form-control" value="{{ $level->level_kode }}" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Nama Level</label>
                <div class="col-11">
                    <input type="text" class="form-control" value="{{ $level->level_nama }}" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-1 control-label col-form-label"></label>
                <div class="col-11">
                    <a class="btn btn-sm btn-default ml-1" href="{{ url('level') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection