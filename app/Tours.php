<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
	protected $table="tours";

	public function dktour(){
        return $this->hasMany('App\DK_Tour','matour','id');
    }

    public function huongdanvien(){
    	return $this->hasMany('App\HuongDanVien','mahdv','id');
    }

    public function diemthamquan(){
    	return $this->belongsToMany('App\DiemThamQuan','madiem','id');
    }

    public function phuongtien(){
    	return $this->belongsToMany('App\PhuongTien','mapt','id');
    }
}
