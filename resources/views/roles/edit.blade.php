@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1>Chỉnh sửa vai trò</h1>
                    <form method="POST" action="{{ route('roles.update', $role->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <h3>Quyền truy cập</h3>
                            @foreach ($permissions as $permission)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="permissions[]"
                                        id="permission{{ $permission->id }}" value="{{ $permission->name }}"
                                        {{ $role->permissions->contains($permission) ? 'checked' : '' }}>
                                    <label for="permission{{ $permission->id }}"
                                        class="form-check-label">{{ $permission->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-warning">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
