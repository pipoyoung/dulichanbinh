<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Tours;
use App\HuongDanVien;

class ToursController extends Controller
{
    public function getDanhSach()
    {
        $tours = Tours::paginate(5);
        return view('admin.tours.danhsachtour',['tours'=>$tours]);
    }

     public function getThem()
    {
        $huongdanvien = HuongDanVien::all();
        return view('admin.tours.themtour',['huongdanvien'=>$huongdanvien]);
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'tentour'=>'required|unique:Tours,tentour',
                'gia'=>'required|numeric',
                'ngaybatdau'=>'required',
                'ngayketthuc'=>'required',
            ],
            [
                'tentour.required'=>'Bạn chưa nhập tên tour',
                'tentour.unique'=>'Tên loại tin đã tồn tại',
                'tentour.required'=>'Bạn chưa nhập giá tour',
                'gia.numeric'=>'Giá phải là kiểu số',
                'ngaybatdau.required'=>'Bạn chưa nhập ngày bắt đầu',
                'ngaybatdau.required'=>'Bạn chưa nhập ngày kết thúc',
            ]);
        $tours = new Tours;
        $tours->tentour = $request->tentour;
        $tours->mahdv = $request->HuongDanVien;
        $tours->gia = $request->gia;
        $tours->ngaybatdau = $request->ngaybatdau;
        $tours->ngayketthuc = $request->ngayketthuc;
        $tours->save();
        return redirect('admin/tours/them')->with('thongbao','Đã thêm thành công !');
    }
     public function getSua($id)
    {
        $huongdanvien = HuongDanVien::all();
        $tours =  Tours::find($id);
        return view('admin.tours.suatour',['tours'=>$tours,'huongdanvien'=>$huongdanvien]);
    }

     public function postSua(Request $request,$id)
    {
        
        $this->validate($request,
            [
                'tentour'=>'required|unique:Tours,tentour',
                'gia'=>'required|numeric',
                'ngaybatdau'=>'required',
                'ngayketthuc'=>'required',
            ],
            [
                'tentour.required'=>'Bạn chưa nhập tên tour',
                'tentour.unique'=>'Tên loại tin đã tồn tại',
                'tentour.required'=>'Bạn chưa nhập giá tour',
                'gia.numeric'=>'Giá phải là kiểu số',
                'ngaybatdau.required'=>'Bạn chưa nhập ngày bắt đầu',
                'ngaybatdau.required'=>'Bạn chưa nhập ngày kết thúc',
            ]);
        $tours= Tours::find($id);
        $tours->mahdv = $request->HuongDanVien;
        $tours->tentour = $request->tentour;
        $tours->gia = $request->gia;
        $tours->ngaybatdau = $request->ngaybatdau;
        $tours->ngayketthuc = $request->ngayketthuc;
        $tours->save();

        return redirect('admin/tours/danhsach')->with('thongbao','Sửa thành công !');
    }

    public function getXoa($id)
    {
        $tours=Tours::find($id);
        $tours->delete();

        return redirect('admin/tours/danhsach')->with('thongbao','Bạn đã xóa thành công !');
    }
}
