<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HuongDanVien extends Model
{
	protected $table = "huongdanvien";

	public function tour(){
		return $this->belongsTo('App\Tours','mahdv','id');
	}
}
