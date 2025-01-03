@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1>Chỉnh sửa tài khoản</h1>
                    <form method="POST" action="{{ route('users.update', $user) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Họ tên:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $user->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}" required>
                        </div>

                        <div class="form-group">
                            <label for="roles">Vai trò:</label>
                            <select name="roles[]" class="form-control" multiple>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}"
                                        {{ in_array($role->name, $userRole ?? []) ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
