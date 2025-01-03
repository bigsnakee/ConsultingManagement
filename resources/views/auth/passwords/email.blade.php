@extends('layouts.auth')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<h2>Quên mật khẩu</h2>
<p class="text-center">Vui lòng nhập địa chỉ email, chúng tôi sẽ gửi cho bạn đường dẫn xác thực</p>
<form method="POST" action="{{ route('password.email') }}">
@csrf

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{ __('Địa chỉ Email') }}</label>
    <input id="exampleInputEmail1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

<div class="row mb-0">
    <div>
        <button type="submit" class="btn btn-primary">
            {{ __('Send Password Reset Link') }}
        </button>
    </div>
</div>
</form>
@endsection
