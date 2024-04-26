
@extends('dashboard')
@section('content')
<div class="container">
    <h2>Danh sách Sở Thích</h2>
    @if($interests->isEmpty())
        <p>Không có sở thích nào.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SỞ THÍCH</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($interests as $item)
                    <tr>
                        <td>{{$item->list_Interest_id}}</td>
                        <td>{{$item->interest_name}}</td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    @endif
</div>
@endsection