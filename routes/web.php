<?php

use Illuminate\Support\Facades\Route;

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
    return view('Student.login');
});

Auth::routes();

Route::get('account-login','StudentController@login');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/info', 'StudentController@info')->name('info')->middleware('auth');

Route::get('/edit/{id}','StudentController@edit')->name('edit')->middleware('auth');

Route::post('/update/{id}','StudentController@update')->name('update')->middleware('auth');

Route::get('/background-info', 'StudentController@background')->name('background')->middleware('auth');

Route::post('/background-submit','StudentController@parentalsubmit')->name('back')->middleware('auth');

Route::resource('/student-info','StudentInfoController')->middleware('auth');


// co curriculum //
Route::get('enter-cocurriculum','StudentController@cocu')->middleware('auth');
Route::post('co-curriculum','StudentController@co')->name('co')->middleware('auth');


//accomodation //
Route::get('enter-accomodation','StudentController@acc')->middleware('auth');
Route::post('accomodation','StudentController@ac')->name('ac')->middleware('auth');



//viewing


Route::get('sbackground','StudentController@viewb')->middleware('auth');
Route::get('scocurriculum','StudentController@viewc')->middleware('auth');
Route::get('saccomodation','StudentController@viewa')->middleware('auth');

// 



















// viewing info //
Route::get('viewbackground/{id}','AdministratorController@background')->middleware('auth');
Route::get('viewcocurriculum/{id}','AdministratorController@sports')->middleware('auth');
Route::get('viewaccomodation/{id}','AdministratorController@accomodation')->middleware('auth');


Route::get('background-in','AdministratorController@viewb')->middleware('auth');
Route::get('cocurriculum','AdministratorController@viewc')->middleware('auth');
Route::get('accomodation','AdministratorController@viewa')->middleware('auth');


//deleteing info//
Route::delete('bdelete{id}','AdministratorController@bdelete')->name('bdelete')->middleware('auth');
Route::delete('pdelete{id}','AdministratorController@pdelete')->name('pdelete')->middleware('auth');
Route::delete('cdelete{id}','AdministratorController@cdelete')->name('cdelete')->middleware('auth');
Route::delete('adelete{id}','AdministratorController@adelete')->name('adelete')->middleware('auth');








Route::get('admin/student-info','AdministratorController@m_student')->middleware('auth');
Route::get('admin/student-background','AdministratorController@b_student')->middleware('auth');


Route::get('background-report','AdministratorController@breport')->middleware('auth');
Route::get('curriculum-report','AdministratorController@creport')->middleware('auth');
Route::get('accomodation-report','AdministratorController@areport')->middleware('auth');


Route::get('/dashboard','StudentController@dashboard')->name('b')->middleware('auth');