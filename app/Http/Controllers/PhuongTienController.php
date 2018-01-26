<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\PhuongTien;

class PhuongTienController extends Controller
{
    public function getDanhSach()
    {
        $phuongtien = PhuongTien::paginate(5);
        return view('admin.phuongtien.danhsachpt',['phuongtien'=>$phuongtien]);
    }
     public function getThem()
    {
        $phuongtien = PhuongTien::all();
        return view('admin.phuongtien.thempt',['phuongtien'=>$phuongtien]);
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'tenpt'=>'required|unique:PhuongTien,tenpt',
                'loaipt'=>'required',
                'socho'=>'required|numeric',
                'hientrang'=>'required',
            ],
            [
                'tenpt.required'=>'Bạn chưa nhập tên phương tiện',
                'tenpt.unique'=>'Tên phương tiện đã tồn tại',
                'loaipt.required'=>'Bạn chưa nhập loại phương tiện',
                'socho.numeric'=>'Số chỗ phải là kiểu số',
                'hientrang.required'=>'Bạn chưa nhập hiện trạng pt',
            ]);
        $phuongtien = new PhuongTien;
        $phuongtien->tenpt = $request->tenpt;
        $phuongtien->loaipt = $request->loaipt;
        $phuongtien->socho = $request->socho;
        $phuongtien->hientrang = $request->hientrang;
        $phuongtien->save();

        return redirect('admin/phuongtien/them')->with('thongbao','Đã thêm thành công !');
    }
    public function getSua($id)
    {
        $phuongtien =  PhuongTien::find($id);
        return view('admin.phuongtien.suapt',['phuongtien'=>$phuongtien]);
    }

     public function postSua(Request $request,$id)
    {
        
        $this->validate($request,
            [
                'tenpt'=>'required|unique:PhuongTien,tenpt',
                'loaipt'=>'required',
                'socho'=>'required|numeric',
                'hientrang'=>'required',
            ],
            [
                'tenpt.required'=>'Bạn chưa nhập tên phương tiện',
                'tenpt.unique'=>'Tên phương tiện đã tồn tại',
                'loaipt.required'=>'Bạn chưa nhập loại phương tiện',
                'socho.numeric'=>'Số chỗ phải là kiểu số',
                'hientrang.required'=>'Bạn chưa nhập hiện trạng pt',
            ]);
        $phuongtien= PhuongTien::find($id);
        $phuongtien->tenpt = $request->tenpt;
        $phuongtien->loaipt = $request->loaipt;
        $phuongtien->socho = $request->socho;
        $phuongtien->hientrang = $request->hientrang;
        $phuongtien->save();

        return redirect('admin/phuongtien/danhsach')->with('thongbao','Sửa thành công !');
    }

    public function getXoa($id)
    {
        $phuongtien=PhuongTien::find($id);
        $phuongtien->delete();

        return redirect('admin/phuongtien/danhsach')->with('thongbao','Bạn đã xóa thành công !');
    }

}
