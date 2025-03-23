@extends('adminlte::page')

@section('title', 'User & Level Management')

@section('content_header')
    <h1>User & Level Management</h1>
@stop

@section('content')
    <div class="row">
        <!-- User Form -->
        <div class="col-md-6">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">User Management</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/user/tambah_simpan') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Username input -->
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- Name input -->
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Enter name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Password input -->
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- Level select -->
                                <div class="form-group">
                                    <label>Level</label>
                                    <select class="form-control" name="level_id">
                                        <option value="">Select Level</option>
                                        @foreach($levels ?? [] as $level)
                                            <option value="{{ $level->level_id }}">{{ $level->level_nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Submit User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Level Form -->
        <div class="col-md-6">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Level Management</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/level/tambah_simpan') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Level Code input -->
                                <div class="form-group">
                                    <label>Level Kode</label>
                                    <input type="text" class="form-control" name="level_kode" placeholder="Enter level code">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- Level Name input -->
                                <div class="form-group">
                                    <label>Level Nama</label>
                                    <input type="text" class="form-control" name="level_nama" placeholder="Enter level name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Description textarea -->
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="description" placeholder="Enter level description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Submit Level</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Display Tables -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users ?? [] as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->level->level_nama ?? '-' }}</td>
                                <td>
                                    <a href="{{ url('/user/ubah/'.$user->user_id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('/user/hapus/'.$user->user_id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Delete this user?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Level List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($levels ?? [] as $level)
                            <tr>
                                <td>{{ $level->level_kode }}</td>
                                <td>{{ $level->level_nama }}</td>
                                <td>
                                    <a href="{{ url('/level/ubah/'.$level->level_id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('/level/hapus/'.$level->level_id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Delete this level?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
        $(function () {
            // Initialize any plugins or custom JS here
            console.log('User & Level Management page loaded');
        });
    </script>
@stop