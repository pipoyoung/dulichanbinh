<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiemThamQuan extends Model
{
    protected $table="diemthamquan";

    public function tour(){
    	return $this->belongsToMany('App\Tours','matour','id');
    }
}
