<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuongTien extends Model
{
    protected $table="phuongtien";

    public function tour(){
    	return $this->belongsToMany('App\Tours','matour','id');
    }
}
