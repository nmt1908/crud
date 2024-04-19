@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Update User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <div class="form-group mb-3">
                                    <label for="updateUsername">Tên user:</label>
                                    <input type="text" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="updateEmail">Email:</label>
                                    <input type="text" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="updatePassword">Mật khẩu mới:</label>
                                    <input type="password" placeholder="Hãy nhập mật khẩu mới" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="updatePhone">Phone mới:</label>
                                    <input type="text" placeholder="Hãy nhập sdt mới" id="phone" class="form-control"
                                           name="phone" required>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="updatePassword">So thich mới:</label>
                                    <input type="text" placeholder="Hãy nhập so thich mới" id="favorite" class="form-control"
                                           name="favorite" required>
                                    @if ($errors->has('favorite'))
                                        <span class="text-danger">{{ $errors->first('favorite') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="updateImage">Ảnh mới:</label>
                                    <input type="file" placeholder="Hãy nhập mật khẩu mới" id="img" value="{{ $user->img}}" class="form-control hidden"
                                           name="img" required onchange=(this) style="display: none !important;">
                                    @if ($errors->has('img'))
                                        <span class="text-danger">{{ $errors->first('img') }}</span>
                                    @endif
                                    <img id="avatar" class="thumbnail" width="100px" src="{{ asset($user->img) }}">
                                </div>

                                <div class="d-grid mx-auto">
                                    <input type="submit" ></input>
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