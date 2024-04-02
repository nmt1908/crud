@extends('dashboard')
@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center" style="color:#007bff">Đăng Ký</h3>
                        <div class="card-body">
                            <form action="{{ route('register.custom') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="registerUsername">Tên đăng nhập:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="registerEmail">Email:</label>
                                    <input type="email" id="email_address" name="email" class="form-control" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="registerPassword">Mật khẩu:</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="registerPhone">Phone:</label>
                                    <input type="text" id="phone" name="phone" class="form-control" required>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="registerImage">Chọn ảnh:</label>
                                    <input type="file" id="img" class="form-control hidden" name="img" onchange=(this)>
                                    <img id="avatar" class="thumbnail" width="100px" src=".././storage/img/new_seo-10-512.png">
                                    @if ($errors->has('img'))
                                        <span class="text-danger">{{ $errors->first('img') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember Me</label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                        <input type="submit" value="Đăng ký">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('storage/js/custom.js') }}"></script>
@endsection