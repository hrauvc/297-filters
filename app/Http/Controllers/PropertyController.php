<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Classes\Search\SearchBuilder;

class PropertyController extends Controller
{
   
	public function filter(Request $request)
	{

		$builder = new SearchBuilder('Property', $request);

		$query = $builder->filter();

		return response()->json($query->get());
		
	}

}
