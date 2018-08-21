<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biophoto extends Model
{
    /**
	 * Fields that can be mass assigned.
	 *
	 * @var array
	 */
	protected $fillable = ['file'];

    public function people(){

    	return $this->hasMany(People::class);
    }
}
