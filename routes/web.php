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

Route::get('/', 'WelcomeController@index')->name('home');

Auth::routes(['register' => false]);

Route::get('/register/{role}', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register/{role}', 'Auth\RegisterController@register');


Route::get('/search', 'PupilController@searchView')->name('pupil.searchView');
Route::post('/search', 'PupilController@search');
Route::get('/search/{company}', 'PupilController@apply')->name('pupil.apply');
Route::get('/companies', 'PupilController@companyView')->name('pupil.companyView');
Route::post('/companies/{companyPupil}', 'PupilController@sendHours')->name('pupil.sendHours');
Route::get('/pupils/profile', 'PupilController@profileView')->name('pupil.profileView');
Route::get('/pupils/profile/edit', 'PupilController@profileEdit')->name('pupil.profileEdit');
Route::put('/pupils/profile', 'PupilController@profileUpdate');

Route::get('/requests', 'CompanyController@requestsView')->name('company.requestsView');
Route::get('/requests/{companyPupil}', 'CompanyController@acceptRequests')->name('company.acceptRequests');
Route::get('/requests/{companyPupil}/decline', 'CompanyController@declineRequests')->name('company.declineRequests');
Route::get('/hours', 'CompanyController@hoursView')->name('company.hoursView');
Route::get('/hours/{hour}', 'CompanyController@acceptHours')->name('company.acceptHours');
Route::get('/hours/{hour}/decline', 'CompanyController@declineHours')->name('company.declineHours');
Route::get('/companies/pupils', 'CompanyController@pupilsView')->name('company.pupilsView');
Route::get('/companies/pupils/{companyPupil}/remove', 'CompanyController@remove')->name('company.remove');
Route::get('/companies/profile', 'CompanyController@profileView')->name('company.profileView');
Route::get('/companies/profile/edit', 'CompanyController@profileEdit')->name('company.profileEdit');
Route::put('/companies/profile', 'CompanyController@profileUpdate');

Route::get('/pupils', 'TeacherController@pupilsView')->name('teacher.pupilsView');
Route::get('/teachers/profile', 'TeacherController@profileView')->name('teacher.profileView');
Route::get('/teachers/profile/edit', 'TeacherController@profileEdit')->name('teacher.profileEdit');
Route::put('/teachers/profile', 'TeacherController@profileUpdate');
