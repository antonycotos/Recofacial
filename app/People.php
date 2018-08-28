<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['nationality_id','biophoto_id','nombre', 'apellido','dni','direccion','celular','correo','rol'];

	public function nationality(){

		return $this->belongsTo(Nationality::class);	
	}

	public function biophoto(){

		return $this->belongsTo(Biophoto::class);	
	}

 
}
