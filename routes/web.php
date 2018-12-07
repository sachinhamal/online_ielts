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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

	Route::get('dashboard','DashboardController@index')->name('admin.dashboard');

	//test
	Route::resource('test','TestController');

	//test parts
	Route::resource('question','QuestionController');

	Route::get('student/list','ManageStudentController@index')->name('student.list');
});

Route::group(['prefix'=>'student','middleware'=>['auth']],function(){
	Route::get('dashboard','StudentDashboardController@index')->name('student.dashboard');

	//test
	Route::get('test','StudentTestController@index')->name('student.test');
	Route::get('test/take','StudentTestController@take_test')->name('test.take');
	Route::post('post/take','StudentTestController@post_test')->name('test.post');
	Route::get('/ajax','StudentTestController@ajax');


	//test 
	Route::get('proceed/test','StudentTestController@proceed_test')->name('proceed.test');
	//
	Route::get('/speaking/test','StudentTestController@speaking')->name('speaking.test');

	Route::get('/timer',function(){
		return view('student.test.timer');
	});
});