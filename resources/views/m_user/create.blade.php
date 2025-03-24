@extends('m_user.template')

@section('title', 'Tambah User')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="page-title">
                    <i class="fas fa-user-plus me-2"></i>Tambah User
                </h4>
                <a class="btn btn-secondary" href="{{ route('m_user.index') }}">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <div class="d-flex align-items-center">
                <i class="fas fa-exclamation-triangle me-2"></i>
                <strong>Whoops!</strong> Input Gagal
            </div>
            <ul class="mt-2 mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('m_user.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-user me-1"></i> Username:
                            </label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-address-card me-1"></i> Nama:
                            </label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-key me-1"></i> Password:
                            </label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-level-up-alt me-1"></i> Level ID:
                            </label>
                            <input type="number" name="level_id" class="form-control" placeholder="Masukkan Level ID">
                        </div>
                    </div>
                </div>
                
                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection