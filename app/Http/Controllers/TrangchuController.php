<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Tours;
use Validator;


class TrangchuController extends Controller
{
    public function gioithieu(){
    	return view('layout.gioithieu');
    }

    public function hinhanh(){
    	return view('layout.hinhanh');
    }

    public function tourdulich(){
        return view('layout.tourdulich');
    }

    public function gettimkiem(Request $request){
    	$tukhoa= $request->get('tukhoa');
    	$tour= Tours::where('tentour','like',"%$tukhoa%")->get();
    	return view('layout.timkiem',compact('tour','tukhoa'));
    }

    public function trangquantri(){
        return view('admin.trangquantri');
    }

    public function getLogout(){
        Auth::logout();
        return redirect(\URL::previous());
    }


}
