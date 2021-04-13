<?php

namespace App\Classes\Search\Filters\Property;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

/**
 * 
 */
class FeaturesFilter
{
	
	public static function apply (Builder $query, Request $request) 
	{

		if($request->features) {

			$query->whereHas('features', function($q) use ($request) {

				$q->whereIn('features.id', $request->features);

			});

		}

		return $query;

	}
	
}