<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class CrudUserController extends Controller
{

    
    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.update', ['user' => $user]);
    }

    /**
     * Submit form update user
     */
    public function postUpdateUser(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,id,'.$input['id'],
            'password' => 'required|min:6',
            'img' => 'image|mimes:jpeg,png,jpg,gif', // Đặt kích thước tối đa cho hình ảnh
        ]);

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);

        // Xử lý hình ảnh mới nếu có
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $user->img = 'images/' . $imageName; // Lưu đường dẫn của hình ảnh mới vào cơ sở dữ liệu
        }

        $user->save();

        return redirect("listuser")->withSuccess('You have signed-in');
    }

    public function readUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.read', ['user' => $user]);
    }

}
