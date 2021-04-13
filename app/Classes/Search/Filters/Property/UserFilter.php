<?php

namespace App\Classes\Search\Filters\Property;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

/**
 * 
 */
class UserFilter
{
	
	public static function apply (Builder $query, Request $request) 
	{

		if($request->user){

			$query->where('user_id', $request->user);

		}

		return $query;

	}
	
}