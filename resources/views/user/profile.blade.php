@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <form action="{{ url('/user/update_profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <div class="text-center mb-4">
                @if ($user->foto_profil)
                    <img src="{{ asset('storage/' . $user->foto_profil) }}" alt="Foto Profil" class="img-circle" style="width: 150px; height: 150px; object-fit: cover;">
                @else
                    <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" alt="Default Profile" class="img-circle" style="width: 150px; height: 150px; object-fit: cover;">
                @endif
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" readonly>
                @error('username')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $user->nama }}">
                @error('nama')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Password Baru</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password</small>
                @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Konfirmasi Password Baru</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                @error('password_confirmation')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Foto Profil</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('foto_profil') is-invalid @enderror" id="foto_profil" name="foto_profil" accept="image/*">
                    <label class="custom-file-label" for="foto_profil">Pilih file</label>
                </div>
                <small class="form-text text-muted">Upload foto dengan format: jpeg, png, jpg, gif. Max 2MB</small>
                @error('foto_profil')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection

@push('css')
<style>
    .img-circle {
        border-radius: 50%;
        border: 2px solid #adb5bd;
    }
</style>
@endpush

@push('js')
<script>
$(document).ready(function() {
    // Update filename on file select
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
        
        // Preview image
        if (this.files && this.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('.img-circle').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});
</script>
@endpush 