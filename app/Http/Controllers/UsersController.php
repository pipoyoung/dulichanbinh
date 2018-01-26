<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use App\DK_Tour;
class UsersController extends Controller
{
    public function getDanhSach()
    {
        $user = User::paginate(5);
        return view('admin.users.danhsachkh',['user'=>$user]);
    }
     public function getThem()
    {
        return view('admin.users.themkh');
    }
    public function postThem(Request $request)
    {
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
        $user->quyen = $request->quyen;
        $user->save();
        return redirect('admin/users/them')->with('thongbao','Đã thêm thành công !');
    }

    public function getSua($id)
    {
        $user =  User::find($id);
        return view('admin.users.suakh',['user'=>$user]);
    }

     public function postSua(Request $request,$id)
    {
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
        $user= User::find($id);
        $user->tenkh = $request->tenkh;
        $user->diachi = $request->diachi;
        $user->sdt = $request->sdt;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->quyen = $request->quyen;
        $user->save();

        return redirect('admin/users/danhsach')->with('thongbao','Sửa thành công !');
        
    }

    public function getXoa($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/users/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
