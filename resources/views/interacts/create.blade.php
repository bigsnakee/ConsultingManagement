{{-- resources/views/interacts/create.blade.php --}}
@php
    use App\Enums\StatusEnum;
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Interaction</div>
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

                        <form method="POST" action="{{ route('interacts.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="fullname">Full Name:</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Content:</label>
                                <textarea class="form-control" id="content" name="content" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="time">Time (HH:MM):</label>
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>

                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>

                            <div class="form-group">
                                <label for="method">Method:</label>
                                <select class="form-control" id="method" name="method" required>
                                    <option value="">--Phương thức--</option>
                                    @foreach (App\Enums\MethodEnum::cases() as $method)
                                    <option value="{{ $method->value }}">{{ $method->value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="">--Trạng thái--</option>
                                    @foreach (StatusEnum::cases() as $status)
                                        <option value="{{ $status->value }}">{{ $status->value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="results">Results (optional):</label>
                                <textarea class="form-control" id="results" name="results"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Interaction</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
