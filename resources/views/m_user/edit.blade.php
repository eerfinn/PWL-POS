@extends ('m_user/template')
@section('content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="page-title">
                    <i class="fas fa-user-edit me-2"></i>Edit User
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
                <strong>Ops !</strong> Error
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
            <form action="{{ route('m_user.update', $useri->user_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-id-badge me-1"></i> User id:
                            </label>
                            <input type="text" name="user_id" value="{{ $useri->user_id }}" class="form-control"
                                placeholder="Masukkan User id">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-level-up-alt me-1"></i> Level id:
                            </label>
                            <input type="text" name="level_id" value="{{ $useri->level_id }}" class="form-control"
                                placeholder="Masukkan Level">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-user me-1"></i> Username:
                            </label>
                            <input type="text" name="username" value="{{ $useri->username }}" class="form-control"
                                placeholder="Masukkan Username">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-address-card me-1"></i> Nama:
                            </label>
                            <input type="text" name="nama" value="{{ $useri->nama }}" class="form-control"
                                placeholder="Masukkan Nama">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <i class="fas fa-key me-1"></i> Password:
                            </label>
                            <input type="text" name="password" value="{{ $useri->password }}" class="form-control"
                                placeholder="Masukkan Password">
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection