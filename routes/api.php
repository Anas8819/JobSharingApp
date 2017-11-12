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

use App\Job;
//Route::get('job', function() {
//    // If the Content-Type and Accept headers are set to 'application/json',
//    // this will return a JSON structure. This will be cleaned up later.
//    return Job::all();
//});
//
//Route::get('job/{id}', function($id) {
//    return Job::find($id);
//});
//
//Route::post('job', function(Request $request) {
//    return Job::create($request->all);
//});
//
//Route::put('job/{id}', function(Request $request, $id) {
//    $job = Job::findOrFail($id);
//    $job->update($request->all());
//
//    return $job;
//});
//
//Route::delete('job/{id}', function($id) {
//    Job::find($id)->delete();
//
//    return 204;
//});

Route::apiResource('job','JobController'
//    ,['except' => [
//    'store'
//]]
);
//
//Route::group(['middleware' => 'auth:api'], function() {Route::apiResource('job','JobController'
////    ,['except' => [
////    'store'
////]]
//);
//});

Route::post('register','Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
