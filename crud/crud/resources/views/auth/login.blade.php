@extends('dashboard')
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center" style="color:#007bff">Login</h3>
                        <div class="card-body">
                            <div id="loginForm">
                                <form action="{{ route('login.custom') }}" method="post">
                                @csrf
                                    <label for="loginUsername">Tên đăng nhập:</label>
                                    <input type="text" id="email" name="email" required>
                                    @if ($errors->has('email'))
                                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                            @endif
                                    <label for="loginPassword">Mật khẩu:</label>
                                    <input type="password" id="password" name="password" required>
                                    @if ($errors->has('password'))
                                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                            @endif
                                    <div class="checkbox">
                                        <input type="checkbox" id="remember" name="remember">
                                        <label for="remember">Ghi nhớ đăng nhập</label>
                                    </div>
                                    <a href="{{ route('register-user')}}" class="form-switch">Chưa có tài khoản? Đăng ký ngay</a>
                                    <input type="submit" value="Đăng nhập">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection