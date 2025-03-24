@extends('m_user.template')

@section('title', 'Daftar User')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="page-title">
                    <i class="fas fa-user-cog me-2"></i>CRUD User
                </h4>
                <a class="btn btn-success" href="{{ route('m_user.create') }}">
                    <i class="fas fa-user-plus me-1"></i> Input User
                </a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle me-2"></i>{{ $message }}
        </div>
    @endif
    
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th width="10%">User ID</th>
                    <th width="15%">Level ID</th>
                    <th width="20%">Username</th>
                    <th width="20%">Nama</th>
                    <th width="20%">Password</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($useri as $m_user)
                    <tr>
                        <td class="text-center">{{ $m_user->user_id }}</td>
                        <td class="text-center">{{ $m_user->level_id }}</td>
                        <td>{{ $m_user->username }}</td>
                        <td>{{ $m_user->nama }}</td>
                        <td class="text-center">{{ $m_user->password }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-info btn-sm me-1" href="{{ route('m_user.show', $m_user->user_id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-primary btn-sm me-1" href="{{ route('m_user.edit', $m_user->user_id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection