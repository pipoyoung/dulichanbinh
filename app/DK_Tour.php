<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DK_Tour extends Model
{
    protected $table="DK_Tour";
    
    public function user(){
        return $this->belongsTo('App\User','makh','id');
    }

    public function tour(){
        return $this->belongsTo('App\DK_Tour','matour','id');
    }
}
