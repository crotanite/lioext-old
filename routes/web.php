<?php

use App\Entities\Models\Base;
use App\Entities\Models\Eye;

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

	// return 'master' view
	// with bases, eyes
    return view('master', compact('bases', 'eyes'));
});

Route::post('/lioimage', ['uses' => 'FormController@lioimage']);
Route::post('/liogene', ['uses' => 'FormController@liogene']);
Route::post('/liomart', ['uses' => 'LioMart\FormController@handle']);