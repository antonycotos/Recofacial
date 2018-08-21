<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\User;
use App\Nationality;
use App\Biophoto;
use App\People;
use App\Registry;

use Illuminate\Http\Request;
/**
* 
*/
class PageController extends Controller
{
	
	public function nationality($pais){

	$nationality = Nationality::where('pais', $pais)->pluck('id')->first(); //obtiene el registro pero solo id
	$peoples = People::where('nationalities_id', $nationality)->orderBy('id', 'DESC')->paginate(3);

		return view('Frontend.people', compact('people'));

	}

	public function biophoto($file){

	$biophoto = Biophoto::where('file', $file)->pluck('id')->first(); //obtiene el registro pero solo id
	$peoples = People::where('biophotos_id', $biophoto)->orderBy('id', 'DESC')->paginate(3);

		return view('Frontend.people', compact('people'));

	}

	public function people($clients_id){

		$people = People::where('clients_id', $clients_id)->first();

		return view('Frontend.people', compact('people'));
	}
}	
