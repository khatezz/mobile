<?php

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

Route::get('/', [
	'as'=> 'index',
	'uses'=> 'AuthController@main'
	]);

Route::get('/studcharles',[
	'as' => 'studcharles',
	'uses' => 'PagesController@studcharles'
	]);


Route::get('/printpreview', [
	'as'=> 'printpreview',
	'uses'=> 'PagesController@printpreview'
	]);

Route::get('/uploadfile', [
	'as'=> 'uploadfile',
	'uses'=> 'PagesController@uploadfile'
	]);

Route::post('/insertfile',array('as' => 'insertfile' , 'uses' => 'PagesController@insertfile'));

Route::get('/download',[
	'as' => 'download',
	'uses' => 'PagesController@download'
	]);



Route::get('profile',[
	'as'=> 'profile',
	'uses'=> 'UserController@profile'
	])->middleware('authenticated');



Route::post('profile',[
	'as'=> 'profile',

	'uses'=> 'UserController@update_avatar'
	]);


Route::get('/user/edit_code/{id}',[
	'as' => 'edit_code',
	'uses' => 'PagesController@edit_code'
	]);


Route::post('/user/update_code/{id}',[
	'as' => 'update_code',
	'uses' => 'PagesController@update_code'
	]);










Route::get('navbar',[
	'as'=> 'navbar',
	'uses'=> 'PagesController@navbar'
	]);


Route::get('/register', [
	'as'=> 'register',
	'uses'=> 'AuthController@register'
	]);

Route::post('/register_ok', [
	'as'=> 'register_ok',
	'uses'=> 'AuthController@register_ok'
	]);


Route::post('/login', [
	'as'=> 'login',
	'uses'=> 'AuthController@login'
	]);

Route::get('/user',[
	'as' => 'user',
	'uses'=> 'PagesController@main'
	])->middleware('authenticated');

Route::get('/logout',[
	'as' => 'logout',
	'uses' => 'UserController@logout'
	]);

Route::post('/user/add_quiz',[
	'as' => 'add_quiz',
	'uses' => 'UserController@add_quiz'
	]);


Route::get('addlesson',[
	'as' => 'addlesson',
	'uses' => 'UserController@addlesson'
	]);

Route::get('main',[
	'as' => 'main',
	'uses' => 'PagesController@main'
	]);



Route::get('todo',[
	'as' => 'todo',
	'uses' => 'PagesController@todo'
	]);


Route::get('announcement',[
	'as' => 'announcement',
	'uses' => 'PagesController@announcement'
	]);








Route::get('lesson',[
	'as' => 'lesson',
	'uses' => 'PagesController@lesson'
	]);


Route::get('/user/delete_quiz/{quiz_id}',[
	'as' => 'delete_quiz',
	'uses' => 'UserController@delete_quiz'
	]);


Route::get('/user/del_quiz/{quiz_id}',[
	'as' => 'del_quiz',
	'uses' => 'UserController@del_quiz'
	]);

Route::get('/user/edit/{quiz_id}',[
	'as' => 'edit_quiz',
	'uses' => 'UserController@edit_quiz'
	]);

Route::post('/user/update/{quiz_id}',[
	'as' => 'update_quiz',
	'uses' => 'UserController@update_quiz'
	]);

Route::get('/addquiz',[
	'as' => 'addquiz',
	'uses' => 'PagesController@addquiz'
	]);






Route::get('/multiple',[
	'as' => 'multiple',
	'uses' => 'UserController@multiple'
	]);


Route::get('/user/addmultiple/{id}',[
	'as' => 'addmultiple',
	'uses' => 'UserController@addmultiple'
	]);




Route::get('/assignment',[
	'as' => 'assignment',
	'uses' => 'PagesController@assignment'
	]);


Route::get('/true',[
	'as' => 'true',
	'uses' => 'UserController@true'
	]);


Route::get('/identify',[
	'as' => 'identify',
	'uses' => 'UserController@identify'
	]);


Route::post('/user/add_quest',[
	'as' => 'add_quest',
	'uses' => 'UserController@add_quest'
	]);

Route::get('/user/delete_quest/{quest_id}',[
	'as' => 'delete_quest',
	'uses' => 'UserController@delete_quest'
	]);

Route::get('/user/edit_quest/{quest_id}',[
	'as' => 'edit_quest',
	'uses' => 'UserController@edit_quest'
	]);

Route::post('/user/update_quest/{quest_id}',[
	'as' => 'update_quest',
	'uses' => 'UserController@update_quest'
	]);







Route::post('/user/addtrue',[
	'as' => 'addtrue',
	'uses' => 'UserController@addtrue'
	]);

Route::get('/user/delete_true/{userId}',[
	'as' => 'delete_true',
	'uses' => 'UserController@delete_true'
	]);

Route::get('/user/edit_true/{userId}',[
	'as' => 'edit_true',
	'uses' => 'UserController@edit_true'
	]);

Route::post('/user/update_true/{userId}',[
	'as' => 'update_true',
	'uses' => 'UserController@update_true'
	]);







Route::post('/user/add_identify',[
	'as' => 'add_identify',
	'uses' => 'UserController@add_identify'
	]);

Route::get('/user/delete_identify/{id}',[
	'as' => 'delete_identify',
	'uses' => 'UserController@delete_identify'
	]);

Route::get('/user/edit_identify/{id}',[
	'as' => 'edit_identify',
	'uses' => 'UserController@edit_identify'
	]);

Route::post('/user/update_identify/{id}',[
	'as' => 'update_identify',
	'uses' => 'UserController@update_identify'
	]);




Route::post('/pages/addassignment',[
	'as' => 'addassignment',
	'uses' => 'PagesController@addassignment'
	]);


Route::get('/user/delete_announce/{user_id}',[
	'as' => 'delete_announce',
	'uses' => 'PagesController@delete_announce'
	]);

Route::get('/user/edit_announce/{user_id}',[
	'as' => 'edit_announce',
	'uses' => 'PagesController@edit_announce'
	]);


Route::post('/user/update_announce/{user_id}',[
	'as' => 'update_announce',
	'uses' => 'PagesController@update_announce'
	]);














Route::get('assignment',[
	'as' => 'assignment',
	'uses' => 'PagesController@assignment'
	]);



Route::post('/user/add_assign',[
	'as' => 'add_assign',
	'uses' => 'PagesController@add_assign'
	]);














Route::get('/addt_quests',[
	'as' => 'addt_quests',
	'uses'=> 'PagesController@addt_quests'
	]);


Route::post('/user/addquiz_t',[
	'as' => 'addquiz_t',
	'uses' => 'PagesController@addquiz_t'
	]);

Route::get('/user/delete_t/{id}',[
	'as' =>'delete_t',
	'uses' => 'PagesController@delete_t'
	]);

Route::get('/user/edit_t/{id}',[
	'as' => 'edit_t',
	'uses'=> 'PagesController@edit_t'
	]);

Route::post('/user/update_t/{id}',[
	'as' => 'update_t',
	'uses' => 'PagesController@update_t'
	]);







Route::get('/addi_quest',[
	'as' => 'addi_quest',
	'uses' => 'PagesController@addi_quest'
	]);


Route::post('/user/addquiz_i',[
	'as' => 'addquiz_i',
	'uses' => 'PagesController@addquiz_i'
	]);

Route::get('/user/delete_i/{id}',[
	'as' => 'delete_i',
	'uses'=> 'PagesController@delete_i'
	]);

Route::get('/user/edit_i/{id}',[
	'as' => 'edit_i',
	'uses' => 'PagesController@edit_i'
	]);

Route::post('/user/update_i/{id}',[
	'as' => 'update_i',
	'uses' => 'PagesController@update_i'
	]);


Route::get('/user/addfalse/{id}',[
	'as' => 'addfalse',
	'uses' => 'UserController@addfalse'
	]);


Route::get('/user/addidentify/{id}',[
	'as' => 'addidentify',
	'uses' => 'UserController@addidentify'
	]);


Route::get('/reports',[
	'as' => 'reports',
	'uses' => 'PagesController@reports'
	]);


Route::get('/reports',[
	'as' => 'reports',
	'uses' => 'PagesController@postreports'
	]);











Route::get('/charles',[
	'as' => 'charles',
	'uses' => 'PagesController@charles'
	]);


Route::post('/addstudent',[
	'as' => 'addstudent',
	'uses' => 'PagesController@addstudent'
	]);


Route::get('/student/delete_stud/{id}',[
	'as' => 'delete_stud',
	'uses' => 'PagesController@delete_stud'
	]);


Route::get('/student/edit_stud/{id}',[
	'as' => 'edit_stud',
	'uses' => 'PagesController@edit_stud'
	]);

Route::post('/student/update_stud/{id}',[
	'as' => 'update_stud',
	'uses' => 'PagesController@update_stud'
	]);






Route::get('/augustine',[
	'as' => 'augustine',
	'uses' => 'PagesController@augustine'
	]);

Route::get('/edward',[
	'as' => 'edward',
	'uses' => 'PagesController@edward'
	]);

Route::get('/dominic',[
	'as' => 'dominic',
	'uses' => 'PagesController@dominic'
	]);

Route::get('/viewmultiple/{id}',[
	'as' => 'viewmultiple',
	'uses' => 'PagesController@viewmultiple'
	]);


Route::get('/viewtrue/{id}',[
	'as' => 'viewtrue',
	'uses' => 'PagesController@viewtrue'
	]);

Route::get('/viewidentify/{id}',[
	'as' => 'viewidentify',
	'uses' => 'PagesController@viewidentify'
	]);

Route::get('/grade1st_a',[
	'as' => 'grade1st_a',
	'uses' => 'PagesController@grade1st_a'
	]);
Route::get('/grade1st_b',[
	'as' => 'grade1st_b',
	'uses' => 'PagesController@grade1st_b'
	]);
Route::get('/grade1st_c',[
	'as' => 'grade1st_c',
	'uses' => 'PagesController@grade1st_c'
	]);

Route::get('/grade1st_d',[
	'as' => 'grade1st_d',
	'uses' => 'PagesController@grade1st_d'
	]);

Route::get('/grade1st_e',[
	'as' => 'grade1st_e',
	'uses' => 'PagesController@grade1st_e'
	]);

Route::get('/grade1st_f',[
	'as' => 'grade1st_f',
	'uses' => 'PagesController@grade1st_f'
	]);

Route::get('/grade2nd_a',[
	'as' => 'grade2nd_a',
	'uses' => 'PagesController@grade2nd_a'
	]);


Route::get('/grade2nd_b',[
	'as' => 'grade2nd_b',
	'uses' => 'PagesController@grade2nd_b'
	]);


Route::get('/grade2nd_c',[
	'as' => 'grade2nd_c',
	'uses' => 'PagesController@grade2nd_c'
	]);


Route::get('/grade3rd_a',[
	'as' => 'grade3rd_a',
	'uses' => 'PagesController@grade3rd_a'
	]);



Route::get('/grade3rd_b',[
	'as' => 'grade3rd_b',
	'uses' => 'PagesController@grade3rd_b'
	]);


Route::get('/grade3rd_c',[
	'as' => 'grade3rd_c',
	'uses' => 'PagesController@grade3rd_c'
	]);

Route::get('/grade4th_a',[
	'as' => 'grade4th_a',
	'uses' => 'PagesController@grade4th_a'
	]);

Route::get('/grade4th_b',[
	'as' => 'grade4th_b',
	'uses' => 'PagesController@grade4th_b'
	]);

Route::get('/grade4th_c',[
	'as' => 'grade4th_c',
	'uses' => 'PagesController@grade4th_c'
	]);

Route::get('/grade4th_d',[
	'as' => 'grade4th_d',
	'uses' => 'PagesController@grade4th_d'
	]);

Route::get('/deldownload/{id}',[
	'as' => 'deldownload',
	'uses' => 'PagesController@deldownload'
	]);





////////////////////// PAGES LESSON ///////////////////////////////////////


Route::get('/balance',[
	'as' => 'balance',
	'uses' => 'PagesController@balance'
	]);

Route::get('/act1first',[
	'as' => 'act1first',
	'uses' => 'PagesController@act1first'
	]);








Route::group(['middleware' => 'authenticated'],function(){
	
	Route::get('profile',[
	'as'=> 'profile',
	'uses'=> 'UserController@profile'
	]);

	Route::get('/user',[
	'as' => 'user',
	'uses'=> 'PagesController@main'
	]);
});