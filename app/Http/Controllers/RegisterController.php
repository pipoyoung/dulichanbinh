<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;

class RegisterController extends Controller
{
    public function getDangKy()
    {
        return view('layout.dangky');
    }

    public function postDangKy(Request $request){
        $this->validate($request,
            [
                'tenkh'=>'required',
                'diachi'=>'required',
                'sdt'=>'required|numeric',
                'email'=>'required',
                'password'=>'required|numeric',
            ],
            [
                'tenkh.required'=>'Bạn chưa nhập tên khách hàng',
                'diachi.required'=>'Bạn chưa nhập địa chỉ khách hàng',
                'sdt.required'=>'Bạn chưa nhập sdt khách hàng',
                'sdt.numeric'=>'Giá phải là kiểu số',
                'email.required'=>'Bạn chưa nhập email khách hàng',
                'password.required'=>'Bạn chưa nhập password khách hàng',
                'password.numeric'=>'Giá phải là kiểu số',
            ]);
        
        $user = new User;
        $user->tenkh = $request->tenkh;
        $user->diachi = $request->diachi;
        $user->sdt = $request->sdt;
        $user->email = $request->email;
        //mã hóa pass
        $password = bcrypt($request->password);
        $user->password = $password;
        $user->quyen = '2';
        $user->save();
        return redirect('dangky')->with('thongbao','Đăng ký tài khoản thành công !');
    }
}
