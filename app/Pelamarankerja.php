<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamarankerja extends Model
{
    protected $fillable = ['cv'];
     public $timestamps = true;

     public function Perusahaan() 
    {
		return $this->belongsToMany('App\Perusahaan', 'daftar_loker', 'id_pelamarankerja', 'id_perusahaan');
 }
