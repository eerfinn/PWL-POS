{{-- filepath: c:\laragon\www\PWL_POS\resources\views\level\index.blade.php --}}
@extends('layouts.app')

@section('subtitle', 'Level')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Level')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Manage Level
                <a href="{{ url('level/tambah') }}" class="btn btn-primary float-right">+ Tambah Level</a>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
