{{-- resources/views/interacts/edit.blade.php --}}
@php
    use App\Enums\MethodEnum;
    use App\Enums\StatusEnum;
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Interaction</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('interacts.update', $interact->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="fullname">Full Name:</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $interact->fullname }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $interact->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $interact->phone }}" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Content:</label>
                                <textarea class="form-control" id="content" name="content" required>{{ $interact->content }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="time">Time (HH:MM):</label>
                                <input type="time" class="form-control" id="time" name="time" value="{{ $interact->time }}" required>
                            </div>

                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $interact->date }}" required>
                            </div>

                            <div class="form-group">
                                <label for="method">Method:</label>
                                <select class="form-control" id="method" name="method" required>
                                    @foreach (MethodEnum::cases() as $method)
                                        <option value="{{ $method->value }}" {{ ($method->value == $interact->method) ? 'selected' : '' }}>{{ $method->value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" id="status" name="status" required>
                                    @foreach (StatusEnum::cases() as $status)
                                        <option value="{{ $status->value }}" {{ ($status->value == $interact->status) ? 'selected' : '' }}>{{ $status->value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="results">Results (optional):</label>
                                <textarea class="form-control" id="results" name="results">{{ $interact->results }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Interaction</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
