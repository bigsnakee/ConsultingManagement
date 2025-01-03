@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tạo vai trò</h1>
    <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Tên vai trò:</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
            <h3>quyền truy cập</h3>
            @foreach ($permissions as $permission)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="permissions[]" id="permission{{ $permission->id }}" value="{{ $permission->name }}">
                <label for="permission{{ $permission->id }}" class="form-check-label">{{ $permission->name }}</label>
            </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-success">Tạo vai trò</button>
    </form>
</div>
@endsection
