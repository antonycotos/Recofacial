<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{

	/**
	 * Fields that can be mass assigned.
	 *
	 * @var array
	 */
	protected $fillable = ['pais', 'ciudad' ];

    public function people(){

    	return $this->hasMany(People::class);
    }
}
