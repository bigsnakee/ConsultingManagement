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
                    <h1>Vai trò</h1>
                    <a href="{{ route('roles.create') }}" class="btn btn-success">Thêm mới</a>
                    <table id="rolesTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th width="90px">Vai trò</th>
                                <th>Quyền truy cập</th>
                                <th width="215px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ implode(', ', $role->permissions->pluck('name')->toArray()) }}</td>
                                    <td>
                                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Xóa</button>
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
