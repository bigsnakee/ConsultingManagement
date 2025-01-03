@extends('layouts.app')

@section('title', 'Quản lý tương tác')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="pull-right">

                        <a class="btn btn-success" href="{{ route('interacts.create') }}">Tạo mới</a>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <table id="rolesTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Họ tên</th>
                                        <th>Email</th>
                                        <th>Điện thoại</th>
                                        <th>Nội dung</th>
                                        <th>Giờ</th>
                                        <th>Ngày</th>
                                        <th>Phương thức</th>
                                        <th>Kết quả</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($interacts as $interact)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $interact->fullname }}</td>
                                        <td>{{ $interact->email }}</td>
                                        <td>{{ $interact->phone }}</td>
                                        <td>{{ $interact->content }}</td>
                                        <td>{{ $interact->date }}</td>
                                        <td>{{ $interact->time }}</td>
                                        <td>{{ $interact->method->value }}</td>
                                        <td>{{ $interact->results }}</td>
                                        <td>{{ $interact->status->value }}</td>
                                        <td>
                                            <a href="{{ route('interacts.show', $interact) }}" class="btn btn-info">View</a>
                                            <a href="{{ route('interacts.edit', $interact) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('interacts.destroy', $interact) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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
        </div>
    </div>
@endsection
