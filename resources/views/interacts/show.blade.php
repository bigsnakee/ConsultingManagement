{{-- resources/views/interacts/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Interaction Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4"><strong>Full Name:</strong></div>
                        <div class="col-md-8">{{ $interact->fullname }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><strong>Email:</strong></div>
                        <div class="col-md-8">{{ $interact->email }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><strong>Phone:</strong></div>
                        <div class="col-md-8">{{ $interact->phone }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><strong>Content:</strong></div>
                        <div class="col-md-8">{{ $interact->content }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><strong>Time:</strong></div>
                        <div class="col-md-8">{{ $interact->time }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><strong>Date:</strong></div>
                        <div class="col-md-8">{{ $interact->date }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><strong>Method:</strong></div>
                        <div class="col-md-8">{{ $interact->method }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><strong>Status:</strong></div>
                        <div class="col-md-8">{{ $interact->status }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4"><strong>Results:</strong></div>
                        <div class="col-md-8">{{ $interact->results }}</div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <a href="{{ route('interacts.edit', $interact->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('interacts.destroy', $interact->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
