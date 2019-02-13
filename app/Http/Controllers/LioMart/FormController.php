<?php

namespace App\Http\Controllers\LioMart;

use App\Entities\Models\Base;
use App\Entities\Models\Eye;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
	/**
	 * Handle calculating the price of the submitted
	 * lion data.
	 *
	 * @return
	 */
	public function handle()
	{
		// set the variables
		$sb_price = 0;
		$gb_price = 0;
		$base_color = request()->input('base_color');
		$eye_color = request()->input('eye_color');

		// do we have a base_color?
		if($base_color !== null)
		{
			// fetch the base_color
			$base_color = Base::where('id', '=', $base_color)->first();

			// update prices
			$sb_price = $sb_price + $base_color->price->sb_price;
			$gb_price = $gb_price + $base_color->price->gb_price;
		}

		// do we have a eye_color?
		if($eye_color !== null)
		{
			// fetch the base_color
			$eye_color = Eye::where('id', '=', $eye_color)->first();

			// update prices
			$sb_price = $sb_price + $eye_color->price->sb_price;
			$gb_price = $gb_price + $eye_color->price->gb_price;
		}

		// return the prices
		return [
			'sb_price' => $sb_price,
			'gb_price' => $gb_price,
		];
	}
}