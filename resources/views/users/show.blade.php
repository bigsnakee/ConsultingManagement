@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1>User Details</h1>
                    <div class="card">
                        <div class="card-header">
                            Thông tin tài khoản
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">
                                <strong>Email:</strong> {{ $user->email }}<br>
                                <strong>Vài trò:</strong> {{ implode(', ', $user->roles->pluck('name')->toArray()) }}<br>
                                <strong>Quyền truy cập:</strong>
                                @foreach ($user->roles as $role)
                                    @foreach ($role->permissions as $permission)
                                        {{ $permission->name }},
                                    @endforeach
                                @endforeach

                            </p>
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Sửa</a>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary">Trở lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
