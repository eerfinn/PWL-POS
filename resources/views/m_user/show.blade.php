@extends('m_user.template')
@section('content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="page-title">
                    <i class="fas fa-user-circle me-2"></i>Show User
                </h4>
                <a class="btn btn-secondary" href="{{ route('m_user.index') }}">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="user-detail-item mb-4">
                        <div class="detail-label">
                            <i class="fas fa-id-badge me-2"></i><strong>User_id:</strong>
                        </div>
                        <div class="detail-value py-2 px-3 bg-light rounded mt-2">
                            {{ $useri->user_id }}
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="user-detail-item mb-4">
                        <div class="detail-label">
                            <i class="fas fa-level-up-alt me-2"></i><strong>Level_id:</strong>
                        </div>
                        <div class="detail-value py-2 px-3 bg-light rounded mt-2">
                            {{ $useri->level_id }}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="user-detail-item mb-4">
                        <div class="detail-label">
                            <i class="fas fa-user me-2"></i><strong>Username:</strong>
                        </div>
                        <div class="detail-value py-2 px-3 bg-light rounded mt-2">
                            {{ $useri->username }}
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="user-detail-item mb-4">
                        <div class="detail-label">
                            <i class="fas fa-address-card me-2"></i><strong>Nama:</strong>
                        </div>
                        <div class="detail-value py-2 px-3 bg-light rounded mt-2">
                            {{ $useri->nama }}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="user-detail-item mb-4">
                        <div class="detail-label">
                            <i class="fas fa-key me-2"></i><strong>Password:</strong>
                        </div>
                        <div class="detail-value py-2 px-3 bg-light rounded mt-2">
                            {{ $useri->password }}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-3">
                <a class="btn btn-primary" href="{{ route('m_user.edit', $useri->user_id) }}">
                    <i class="fas fa-edit me-1"></i> Edit User
                </a>
            </div>
        </div>
    </div>
@endsection