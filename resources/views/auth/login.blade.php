@extends('layouts.app')

@section('content')
<head>
    <title>Login @yield('title')</title>
</head>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default ">
                                    <div class="block-options">
                                        <h3 class="block-title"> เข้าสู่ระบบ </h3>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="row justify-content-center py-sm-3 py-md-5">
                                        <div class="col-sm-10 col-md-8">
                                            <div class="form-group">
                                                <label for="block-form8-username"><i class="fa fa-user text-dark"></i> ชื่อผู้ใช้งาน</label>
                                                <input id="username" type="text"
                                                    class="form-control form-control-alt @error('username') is-invalid @enderror"
                                                    name="username" value="{{ old('username') }}" required
                                                    autocomplete="username" autofocus>
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="block-form8-password"><i class="fa fa-lock text-dark"></i> รหัสผ่าน</label>
                                                <input id="password" type="password"
                                                    class="form-control form-control-alt @error('username') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('เข้าสู่ระบบ') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
