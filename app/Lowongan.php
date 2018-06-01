<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
     protected $fillable = ['nama_loker','id_perusahaan']; 
    public $timestamps = true;  

    public function Perusahaan()
    {
    	return $this->belongsTo('App\Perusahaan','id_perusahaan');
    }
    public function Syaratloker()
	{
		return $this->belongsTo('App\Syaratloker','id_syaratloker');
	}
}
