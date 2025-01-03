@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h1>Danh sách tài khoản</h1>
                    <a href="{{ route('users.create') }}" class="btn btn-success mb-3">Tạo mới tài khoản</a>
                    <table id="rolesTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Vai trò</th>
                                <th width="215px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                                    <td>
                                        <a href="{{ route('users.show', $user) }}" class="btn btn-info">Xem</a>
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Sửa</a>
                                        <form action="{{ route('users.destroy', $user) }}" method="POST"
                                            style="display:inline;" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
