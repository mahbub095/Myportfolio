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
//Frontend
Route::get('/', function () {
    return view('welcome');
});
//homepage contact route
Route::post('contact', 'ContactController@store')->name('contact.store');

Auth::routes();

//Dashboard
Route::get('admin', 'DashboardController@index')->name('admin');;

Route::resource('intro', 'IntroController');

Route::resource('taglines', 'TaglineController');

//About resouce route
Route::resource('about', 'AboutController');

//Service resouce route
Route::resource('service', 'ServiceController');
Route::get('services/destroy/{id}', 'ServiceController@destroy')->name('services.delete');

//Contact resource route
Route::resource('contact', 'ContactController');


//Testimonials resouce route
Route::resource('testimonials', 'TestimonialsController');
Route::get('testimonials/destroy/{id}', 'TestimonialsController@destroy')->name('testimonials.delete');


//Resume resouce route
Route::resource('resume', 'ResumeController');
Route::get('resume/destroy/{id}', 'ResumeController@destroy')->name('resume.delete');
//Category resource route
Route::resource('category', 'CategoryController');
Route::get('category/destroy/{id}', 'CategoryController@destroy')->name('categorys.delete');

//porfolio resouce route
Route::resource('portfolio', 'PortfolioController');
Route::get('portfolios/destroy/{id}', 'PortfolioController@destroy')->name('portfolios.delete');

//skill resource route
Route::resource('skill', 'SkillController');
Route::get('skills/destroy/{id}', 'SkillController@destroy')->name('skills.delete');


//skill resource route
Route::resource('softskill', 'SoftskillController');
Route::get('softskills/destroy/{id}', 'SoftskillController@destroy')->name('softskills.delete');



//skill resource route
Route::resource('jobs', 'JobController');
Route::get('jobs/destroy/{id}', 'JobController@destroy')->name('jobs.delete');
