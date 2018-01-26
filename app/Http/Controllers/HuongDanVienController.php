<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\HuongDanVien;

class HuongDanVienController extends Controller
{
    public function getDanhSach()
    {
        $hdv = HuongDanVien::paginate(5);
        return view('admin.huongdanvien.danhsachhdv',['hdv'=>$hdv]);
    }

    public function getThem()
    {
        return view('admin.huongdanvien.themhdv');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'tenhdv'=>'required',
                'diachi'=>'required',
                'sdt'=>'required|numeric',
                'phai'=>'required',
            ],
            [
                'tenhdv.required'=>'Bạn chưa nhập tên hdv',
                'diachi.required'=>'Bạn chưa nhập địa chỉ hdv',
                'sdt.required'=>'Bạn chưa nhập sdt hdv',
                'sdt.numeric'=>'Giá phải là kiểu số',
                'phai.required'=>'Bạn chưa nhập giới tính',
            ]);
        $hdv = new HuongDanVien;
        $hdv->tenhdv = $request->tenhdv;
        $hdv->phai = $request->phai;
        $hdv->diachi = $request->diachi;
        $hdv->sdt = $request->sdt;
        $hdv->save();
        return redirect('admin/huongdanvien/them')->with('thongbao','Đã thêm thành công !');
    }

    public function getSua($id)
    {
        $hdv =  HuongDanVien::find($id);
        return view('admin.huongdanvien.suahdv',['hdv'=>$hdv]);
    }

     public function postSua(Request $request,$id)
    {
        $this->validate($request,
            [
                'tenhdv'=>'required',
                'diachi'=>'required',
                'sdt'=>'required|numeric',
                'phai'=>'required',
            ],
            [
                'tenhdv.required'=>'Bạn chưa nhập tên hdv',
                'diachi.required'=>'Bạn chưa nhập địa chỉ hdv',
                'sdt.required'=>'Bạn chưa nhập sdt hdv',
                'sdt.numeric'=>'Giá phải là kiểu số',
                'phai.required'=>'Bạn chưa nhập giới tính',
            ]);
        $hdv= HuongDanVien::find($id);
        $hdv->tenhdv = $request->tenhdv;
        $hdv->phai = $request->phai;
        $hdv->diachi = $request->diachi;
        $hdv->sdt = $request->sdt;
        $hdv->save();

        return redirect('admin/huongdanvien/danhsach')->with('thongbao','Sửa thành công !');
        
    }

    public function getXoa($id)
    {
        $hdv = HuongDanVien::find($id);
        $hdv->delete();

        return redirect('admin/huongdanvien/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
