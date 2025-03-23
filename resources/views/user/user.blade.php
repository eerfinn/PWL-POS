{{-- filepath: c:\laragon\www\PWL_POS\resources\views\user\user.blade.php --}}
@extends('layouts.app')

@section('subtitle', 'User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'User')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Manage User
                <a href="{{ url('user/tambah') }}" class="btn btn-primary float-right">+ Tambah User</a>
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
