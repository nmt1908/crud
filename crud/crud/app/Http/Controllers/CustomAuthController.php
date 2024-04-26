<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//Unknow
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = null;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $data = $request->except('img');
        $data['img'] = $imagePath;

        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'img' => $data['img'],
        ]);
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('listuser')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function listuser()
    {
        $listUser = User::paginate(5);
        return view('listuser', ['listUser' => $listUser]);
    }
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
    public function deleteUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($user->posts()->exists()) {
            return redirect()->back()->with('error', 'Người dùng có bài viết, không thể xóa.');
        }
        if ($user->favorites->count() > 0) {
            return redirect()->back()->with('error', 'Người dùng có sở thích, không thể xóa.');
        }

        try {
            $user->delete();
            return redirect()->back()->with('success', 'Người dùng đã được xóa thành công.');
        } catch (\Exception $e) {
            // Xử lý nếu có lỗi khi xóa người dùng
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi xóa người dùng.');
        }
    }

}