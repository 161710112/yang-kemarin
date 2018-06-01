<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syaratloker extends Model
{
     protected $fillable = ['deskripsi','id_lowongan'];
     public $timestamps = true;

     public function Lowongan()
    {
    	return $this->hasOne('App\Lowongan','id_syaratloker');
    }

}
