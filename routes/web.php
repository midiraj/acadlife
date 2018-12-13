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

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/button', function () {
    return view('pages.button');
});

// Route::get('/profile', function () {
//     return view('pages.profile');
// });

// Route::get('/view-course', function () {
//     return view('course.view-course');
// });

// Route::get('/course-std', function () {
//     return view('course.course-std');
// });
// Route::get('/course-req', function () {
//     return view('course.course-req');
// });

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/add-course', 'CourseController@showCourse');
Route::get('/public-post', 'PostController@showPost');
Route::get('/private-mssg', 'MssgController@showMssg');
//Route::get('/add-course', 'CourseController@viewCourse');
//Route::get('/blog/new-blog', 'PagesController@addBlog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/course', 'coursesController');
Route::resource('/profile', 'ProfileController');