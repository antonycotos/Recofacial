<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biophoto extends Model
{
    protected $fillable = ['file' ];

    public function people(){

    	return $this->hasMany(People::class);
    }
}
