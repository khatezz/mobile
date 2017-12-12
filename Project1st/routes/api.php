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



Route::get('/user', function(){

	$token = JWTAuth::getToken();
	$user = JWTAuth::toUser($token);

	return $user;
})->middleware('auth.jwt');

Route::get('/users',[
	'uses' => 'PupilsController@users'
	])->middleware('auth.jwt');


Route::post('/signup', [
		'uses' => 'PupilsController@signup'
	]);


Route::post('/logout', [
		'uses' => 'PupilsController@logout'
	]);


Route::post('/pupil/signin', [
		'uses' => 'PupilsController@signin'
	]);


Route::post('/pupil/code', [
		'uses' => 'PupilsController@code'
	]);







Route::get('/true',[
	'uses' => 'QuizController@gettrue'
	]);








Route::get('/quiz',[
	'uses' => 'QuizController@getquiz'
	]);

Route::get('/getQuizId/{id}',[
	'uses' => 'QuizController@getQuizId'
	]);









Route::get('/identify',[
	'uses' => 'QuizController@getidentify'
	]);














Route::get('/announcement',[
	'uses' => 'QuizController@getAnnouncementByUser'
	])->middleware('auth.jwt');



Route::get('/announce',[
	'uses' => 'QuizController@getannounce'
	]);

Route::get('/nonseenannounce',[
	'uses' => 'QuizController@getNonSeenAnnounce'
	])->middleware('auth.jwt');


Route::post('/seenannounce', [
		'uses' => 'QuizController@seenAnnounceByUser'
	])->middleware('auth.jwt');









Route::post('/quote',[
	'uses' => 'QuoteController@postquote'
	]);


Route::get('/quotes',[	
	'uses' => 'QuoteController@getquotes'
	]);

Route::put('/quote/{id}',[
	'uses' => 'QuoteController@putquote'
	]);

Route::delete('quote/{id}', [
	'uses' => 'QuoteController@deletequote'
	]);


Route::get('/truequest',[
	'uses' => 'QuizController@gettruequest',
	]);

Route::get('/identifyquest',[
	'uses' => 'QuizController@getidenquest',
	]);











Route::get('/questm1',[
	'uses' => 'QuizController@questm1'
	]);




Route::post('/manswer1',[
	'uses' => 'QuizController@manswer1'
	]);

Route::get('/profile',[
	'uses' => 'QuizController@profile'
	]);

Route::get('/answerm1',[
	'uses' => 'QuizController@answerm1'
	])->middleware('auth.jwt');


Route::get('/answerm1a',[
	'uses' => 'QuizController@answerm1a'
	])->middleware('auth.jwt');

Route::get('/userprof',[
	'uses' => 'QuizController@profile'
	]);

Route::post('/postanswer',[
	'uses' => 'QuizController@postanswer'
	])->middleware('auth.jwt');

Route::get('/quiz_a',[
	'uses' => 'QuizController@quiz_a'
	])->middleware('auth.jwt');