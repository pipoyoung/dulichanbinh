<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use App\Tours;
use App\DK_Tour;
class DkTourController extends Controller
{
     public function getDkTour()
    {
        $user = User::all();
        $user = User::where('quyen', '=', 2)->get();
        $tour = Tours::all();
        return view('khachhang.dangkytour',['user'=>$user,'tour'=>$tour]);
    }
    public function postDkTour(Request $request)
    {
        $dktour = new DK_Tour;
        $dktour->matour = $request->Tours;
        $dktour->makh = $request->User;
        $dktour->soluong = $request->soluong;
        $dktour->tongtien = ($dktour->soluong) * ($tour->gia);
        $dktour->save();
        return redirect('dktour')->with('thongbao','Đăng ký thành công !');
    }
}
