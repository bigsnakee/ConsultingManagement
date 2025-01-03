@extends('layouts.auth')

@section('content')
<a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
    <img src="images/logos/logo.png" width="180" alt="">
  </a>
  <p class="text-center">Nhập thông tin để đăng nhập vào hệ thống</p>
  <form method="POST" action="{{ route('login') }}">
      @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{ __('Email') }}</label>
      <input id="exampleInputEmail1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="mb-4">
      <label for="exampleInputPassword1" class="form-label">{{ __('Mật khẩu') }}</label>
      <input id="exampleInputPassword1" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      @error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="d-flex align-items-center justify-content-between mb-4">
      <div class="form-check">
          <input class="form-check-input primary" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label text-dark" for="remember">
          {{ __('Lưu trình duyệt') }}
        </label>
      </div>
      @if (Route::has('password.request'))
      <a class="text-primary fw-bold" href="{{ route('password.request') }}">{{ __('Quên mật khẩu?') }}</a>
      @endif
    </div>
    <button  class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">{{ __('Đăng nhập') }}</button>
  </form>
@endsection
