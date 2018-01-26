<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\DiemThamQuan;
class DiemThamQuanController extends Controller
{
    public function getDanhSach()
    {
        $diemthamquan = DiemThamQuan::paginate(5);
        return view('admin.diemthamquan.danhsach',['diemthamquan'=>$diemthamquan]);
    }

    public function getThem()
    {
        $diemthamquan = DiemThamQuan::all();
        return view('admin.diemthamquan.them',['diemthamquan'=>$diemthamquan]);
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'tendiem'=>'required',
                'diachi'=>'required',
            ],
            [
                'tendiem.required'=>'Bạn chưa nhập tên điểm',
                'tendiem.required'=>'Bạn chưa nhập tên điểm',
            ]);
        $diemthamquan = new DiemThamQuan;
        $diemthamquan->tendiem = $request->tendiem;
        $diemthamquan->diachi = $request->diachi;
        $diemthamquan->save();

        return redirect('admin/diemthamquan/them')->with('thongbao','Đã thêm thành công !');
    }
    public function getSua($id)
    {
        $diemthamquan =  DiemThamQuan::find($id);
        return view('admin.diemthamquan.sua',['diemthamquan'=>$diemthamquan]);
    }

     public function postSua(Request $request,$id)
    {
        
        $this->validate($request,
            [
                'tendiem'=>'required',
                'diachi'=>'required',
            ],
            [
                'tendiem.required'=>'Bạn chưa nhập tên điểm',
                'tendiem.required'=>'Bạn chưa nhập tên điểm',
            ]);
        $diemthamquan= DiemThamQuan::find($id);
        $diemthamquan->tendiem = $request->tendiem;
        $diemthamquan->diachi = $request->diachi;
        $diemthamquan->save();

        return redirect('admin/diemthamquan/danhsach')->with('thongbao','Sửa thành công !');
    }

    public function getXoa($id)
    {
        $diemthamquan = DiemThamQuan::find($id);
        $diemthamquan->delete();

        return redirect('admin/diemthamquan/danhsach')->with('thongbao','Bạn đã xóa thành công !');
    }
}
