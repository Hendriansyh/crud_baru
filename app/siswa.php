<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table='siswas';
    protected $fillable = ['nama','alamat','jk','orangtua_id'];
    protected $visible = ['nama','alamat','jk','orangtua_id'];
    public $timestamps=true;


    public function orangtua()
    {
    	return $this->belongsTo('App\orangtua', 'orangtua_id');
    }
}
