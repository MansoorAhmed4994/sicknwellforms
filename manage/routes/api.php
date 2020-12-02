<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('form/{form}', function($form) {
        return response()->view('forms.jsform', compact('form'))
        ->header('Content-Type', 'application/javascript;');
    });

    

// Route::get('form/{form}', function($form) {
//     return response()->view('form', compact('form'))
//     ->header('Content-Type', 'application/javascript;');
// });


// Route::get('jsform/{client_form_id}/{form}', function($form) {
//     return response()->view('form.jsform', compact('form','client_form_id'))
//     ->header('Content-Type', 'application/javascript;');
// });