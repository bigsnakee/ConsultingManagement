@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1>Vai trò: {{ $role->name }}</h1>
                    <h3>Quyền truy cập:</h3>
                    <ul>
                        @foreach ($role->permissions as $permission)
                            <li>{{ $permission->name }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Sửa vai trò</a>
                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Xóa vai trò</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
