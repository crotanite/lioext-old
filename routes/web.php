<?php

use App\Entities\Models\Base;
use App\Entities\Models\Eye;
use App\Entities\Models\ManeColor;
use App\Entities\Models\ManeShape;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function()
{
	// fetch the bases
	$bases = Base::all()->groupBy(function($base)
	{
		return ucfirst($base['color']).' '.ucfirst($base['group']).' '.ucfirst($base['shade']);
	});

	// fetch the eyes
	$eyes = Eye::all();

	// fetch the mane shapes
	$mane_shapes = ManeShape::orderBy('name', 'ASC')->get();

	// fetch the mane colors
	$mane_colors = ManeColor::orderBy('name', 'ASC')->get();

	// return 'master' view
	// with bases, eyes
    return view('master', compact('bases', 'eyes', 'mane_shapes', 'mane_colors'));
});

Route::post('/lioimage', ['uses' => 'FormController@lioimage']);
Route::post('/liogene', ['uses' => 'FormController@liogene']);
Route::post('/liomart', ['uses' => 'LioMart\FormController@handle']);