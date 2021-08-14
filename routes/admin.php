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


Route::get('/admin', function () {
    return "Hello admin";
});

##########################################################

//Controller Middleware الدرس 18

//Route::get('third0', 'Admin\ThirdController@showString0')->middleware('auth');

// Route::group(['namespace' => 'Admin'], function () {
//     Route::get('third0', 'ThirdController@showString0')->middleware('auth');
//     Route::get('third1', 'ThirdController@showString1');
//     Route::get('third2', 'ThirdController@showString2');
//     Route::get('third3', 'ThirdController@showString3')->middleware('auth');

// });


Route::group(['namespace' => 'Admin'], function () {
    Route::get('third0', 'ThirdController@showString0');
    Route::get('third1', 'ThirdController@showString1');
    Route::get('third2', 'ThirdController@showString2');
    Route::get('third3', 'ThirdController@showString3');

    Route::get('third4', function () {
        return "This Rout Did Not Auth";
    });

});

// Route::get('teto', function () {
//     return "You Must Log In In This Site To See This Route";
// })->name('login');

//هان لما عملتها ازا بتلاحظ طلعلى بالموقع فوق كلمة login بتبعتنى عالروات هاد
//ولكن ازا وقفت هاد الروات بتروح
//هلقيت انا وصلت للدرس 27 الى بتكلم كيف نعمل صفحة تسجيل دخول
//بدى اضطر اوقف هاد الروات
##########################################################

//Route Resource And Controller Resource الدرس 19

Route::resource('post', 'Admin\PostController');

// Route::post('post', 'Admin\PostController@store');
// Route::get('post', 'Admin\PostController@index');
// Route::get('post/create', 'Admin\PostController@create');
// Route::delete('post/{post}', 'Admin\PostController@destroy');
// Route::put('post/{post}', 'Admin\PostController@update');
// Route::get('post/{post}', 'Admin\PostController@show');
// Route::get('post/{post}/edit', 'Admin\PostController@edit');
