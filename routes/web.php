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

Route::get('/results', 'ResultController@index');

Route::get('/studentsadmin', 'AdminController@stdntadmin');

Route::get('/appusers', 'HiTestController@indexuser');

Route::get('/appteacher', 'HiTestController@indexteacher');

Route::get('/appmarks', 'HiTestController@indexmarks');

Route::get('/apprank', 'HiTestController@indexrank');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chartshow', 'PulseController@chart');

Route::get('/sc','SampleChartController@index');

Route::post('send-mail', 'MailSetting@send_form');



Auth::routes();

Route::get('/themes', 'StudThemeController@index')->name('studtheme');
Route::get('/theme/{studTheme}', 'StudThemeController@show');
Route::get('/theme/test/{studTheme}', 'StudTestController@indexGuest');
Route::post('/theme/test/pass','StudTestController@passGuest');



Route::get('/lections', 'StudThemeController@index');


Route::get('/student/themes', 'StudThemeController@index')->name('studtheme');
Route::get('/student/theme/{studTheme}', 'StudThemeController@show');
Route::get('/student/theme/test/{studTheme}', 'StudTestController@index');
Route::post('/student/theme/test/pass','StudTestController@pass');


Route::get('/student/text', function(){
    return view('student/text');
});


Route::get('/teacher/themes', 'TeachThemeController@show')->name('studtheme');
Route::get('/teacher/themes', 'TeachThemeController@index')->name('professortheme');
Route::get('/teacher/themes/newtheme',function(){
    return view('teacher/themeredactor');
});
Route::post('/teacher/themes/newtheme/create','TeachThemeController@store');
Route::get('/teacher/themes/delete/{id}','TeachThemeController@destroy');
Route::get('/teacher/themes/edit/{teachTheme}','TeachThemeController@edit');
Route::post('/teacher/themes/update/{teachTheme}','TeachThemeController@update');

Route::get('/user/delete/{id}','HomeController@delete');
Route::get('/allthemes', 'HomeController@show');


Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/machart', 'AdminController@chart');
