<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;

class LoginController extends Controller
{
    public function getLogin(){
        return view('layout.dangnhap');
    }
    public function postLogin(Request $request)
    {
        $rules = [
                'email'=>'required|min:11|max:100',
                'password'=>'required|integer'
        ];
        $messages = [
                'email.required'=>'Bạn chua nhập email',
                'email.min'=>'Email phải có độ dài tối thiểu là 11 ký tự',
                'email.max'=>'Email có độ dài tối đa là 100 ký tự',
                'password.required'=>'Bạn chua nhập mật khẩu',
                'password.integer'=>'Mật khẩu chỉ được nhập số',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else 
        {
            $login_admin = [
                'email' => $request->email,
                'password' => $request->password,
                'quyen'=>1,
            ];

            $login_user = [
                'email' => $request->email,
                'password' => $request->password,
                'quyen'=>2,
            ];
            

            if( Auth::attempt($login_user)) 
            {
                
                return redirect('dktour');
            } 
            elseif ( Auth::attempt($login_admin)) 
            {
                return redirect('admin/trangquantri');
            }
            else 
            {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }
}
