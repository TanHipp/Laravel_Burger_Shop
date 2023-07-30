<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // Hiển thị form đăng ký tài khoản
    public function register()
    {
        return view("account.register");
    }

    // Lưu thông tin tài khoản mới
    public function save(Request $request)
    {
        #Validate du lieu
        $this->customValidate($request);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        #Hash mat khau
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/admin/san-pham')->with('success_msg', 'Đăng ký tài khoản thành công!');
    }
    //Đăng nhập
    public function login()
    {
        return view("account.login");
    }

    public function auth(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        if (Auth::attempt($data)) {
            // Thanh Cong
            return redirect()
                ->to("/")
                ->with("success_msg", "Đăng nhập thành công");
        } else {
            // That Bai
            return redirect()
                ->route('account.login')
                ->with("errors_msg", "Tên đăng nhập hoặc mật khẩu không hợp lệ");
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()
            ->to("/")
            ->with("success_msg", "Bạn đã đăng xuất...");
    }

    // Kiểm tra dữ liệu khi đăng ký có thỏa mãn điều kiện không
    public function customValidate(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|',
            'cf_password' => 'required|min:6',
        ]);
    }
}
