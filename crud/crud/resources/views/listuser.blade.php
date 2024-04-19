@extends('dashboard')
@section('content')
<div class="container">
    <h2>Danh sách người dùng</h2>
    @if($listUser->isEmpty())
        <p>Không có người dùng nào.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên đăng nhập</th>
                    <th>Email</th>
                    <th>SDT</th>
                    <th>Sở thích</th>  
                    <th>Img</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listUser as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->favorite}}</td>
                        <td><img src="{{ asset($user->img) }}" alt="" width="150"></td>
                        <td>
                            <button type="button" class="btn btn-primary">
                                <a href="{{ route('user.readUser', ['id' => $user->id] )}}" style="color: white;">Xem</a>
                            </button>|
                            <button type="button" class="btn btn-success">
                                <a href="{{ route('user.updateUser', ['id' => $user->id] )}}" style="color: white;">Sửa</a>
                            </button> | 
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
                                Xóa
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $listUser->links('pagination::bootstrap-5') }}
    @endif
</div>

<!-- Modal -->
@foreach($listUser as $user)
<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xóa người dùng</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            Bạn có muốn xóa người dùng <strong>{{$user->name}}</strong> không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <form action="{{ route('delete.user', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Xóa</button>
        </form>
      </div>
    </div>
  </div>
</div>   
@endforeach

@endsection
