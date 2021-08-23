<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;
// use LaravelLocalization;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/test', function () {
    return "Hello Teto";
});

Route::get('/test1/{id}', function ($id) {
    return "Hello Teto Your id = " . $id ;
});

Route::get('/test2/{id?}', function () {
    return "Hello Teto Your id is Optinal " ;
});

Route::get('/test3/{id?}', function ($id) {
    return "Hello Teto Your id is Optinal " . $id  ;
})->name("teto");

Route::namespace('Front')->group(function() {

    //all route only access controller or method in folder name Front

    Route::get("user", "UserController@showUserName");

});

//Group And Prefix
// Route::prefix('users')->namespace('Front')->group(function() {
//     Route::get("show", "UserController@showUserName");
//     Route::delete("delete", "UserController@showUserName");
//     Route::get("edit", "UserController@showUserName");
//     Route::put("update", "UserController@showUserName");
// });

Route::group(['prefix' => 'users', 'namespace' => 'Front'],function() {
    Route::get('/', function () {
        return "teto";
    });
    Route::get("show", "UserController@showUserName");
    Route::delete("delete", "UserController@showUserName");
    Route::get("edit", "UserController@showUserName");
    Route::put("update", "UserController@showUserName");
});

//Middleware
Route::get('chek', function () {
    return "teto";
})->middleware('auth');

// Route::group(['prefix' => 'users', 'namespace' => 'Front', 'middleware' => 'auth'],function() {
//     Route::get('/', function () {
//         return "teto";
//     });
//     Route::get("show", "UserController@showUserName");
//     Route::delete("delete", "UserController@showUserName");
//     Route::get("edit", "UserController@showUserName");
//     Route::put("update", "UserController@showUserName");
// });

//Controller الدرس17

// Route::get('second', 'Admin\SecondController@showString');

Route::group(['namespace' => 'Admin'], function() {
    Route::get('second/{id?}', 'SecondController@showString');
});

// Route::group(['namespace' => 'Admin'], function() {
//     Route::get('second/{id}', 'SecondController@showString');
// });


//View الدرس 21
Route::get('about', 'Front\FirstController@showString');

//الدرس 22 ...تمرير الداتا للفيو
// Route::get('contact', function () {
//     return view('front.contact')->with('id', 2);
// });

//بقدر امرر اكتر من داتا بنفس الوقت
// Route::get('contact', function () {
//     return view('front.contact', [
//         'id' => 5,
//         'name' => "teto"
//     ]);
// });

//طريقة تانية بكلمة وذ
// Route::get('contact', function () {
//     return view('front.contact')->with([
//         'id' => 2,
//         'name' => "thaer"
//     ]);
// });

//طريقة تالتة لو كان عندى داتا كتيرة بالمشاريع الكبيرة ..بخليها باريه

// Route::get('contact', function () {
//     $data = [];
//     $data['pass'] = 'tate123';
//     $data['name'] = 'Thaer';
//     $data['email'] = 't@gmail.com';
//     return view('front.contact', $data);
// });

//الطريقة الرابعة والصح ...امرر الداتا تبعى بالكنترولر نفسه وهان بالروات ما يكون فى اى عمليات لوجيك ..اكوادى كلها تكون بالكنترولر

Route::get('contact', 'Front\FirstController@showContact');

//Landing Page الدرس 23

Route::get('landing', function () {
    return view('landing');
});

//الدرس 25
Route::get('template', function () {
    return view('template3');
});


Route::get('tanatos', function () {
    return view('front/tanatos-template/tanatos');
});

Route::get('tanatos-contact', function () {
    return view('front/tanatos-template/tanatos-contact');
});

Route::group(['namespace' => 'Tanatos'], function() {
    Route::get('tanatos-home', 'TanatosController@showHome');
    Route::get('tanatos-contact', 'TanatosController@showContact');
    Route::get('tanatos-about', 'TanatosController@showAbout');
});


//الدرس 28 Login And Regester

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


//الدرس 45
//different between fillables and hiddens

Route::get('fillable', 'CrudController@getOffers');


//insert and create to DB

Route::group(['prefix' => 'offers'], function() {
    //الدرس 46
    //Route::get('store', 'CrudController@store');

    //الدرس47
    Route::get('create', 'CrudController@create');
    Route::post('store', 'CrudController@store')->name('offers.store');

});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]

    ], function() {

    Route::group(['prefix' => 'offers'], function() {
        //الدرس 46
        //Route::get('store', 'CrudController@store');

        //الدرس47
        Route::get('create', 'CrudController@create')->name('offers.creat');
        Route::post('store', 'CrudController@store')->name('offers.store');
        Route::get('all', 'CrudController@getAllOffers')->name('offers.all');

        //الدرس 57 edit and update
        Route::get('edit/{offer_id}', 'CrudController@editOffer');
        Route::post('update/{offer_id}', 'CrudController@updateOffer')->name('offers.update');
        //الدرس 64 delete from DB
        Route::get('delete/{offer_id}', 'CrudController@deleteOffer')->name('offers.delete');


    });

});




###############################  Start Ajax Route ###############################

// Route::group(['prefix' => 'ajax-offers'], function() {
    
//     Route::get('create', 'OfferController@create')->name('ajax.offer.creat');
//     Route::post('store', 'OfferController@store')->name('ajax.offer.store');


// });

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]

    ], function() {

        Route::group(['prefix' => 'ajax-offers'], function() {
    
            Route::get('create', 'OfferController@create')->name('ajax.offer.creat');
            Route::post('store', 'OfferController@store')->name('ajax.offer.store');
            Route::get('all', 'OfferController@all')->name('ajax.offer.all');
            Route::post('delete', 'OfferController@delete')->name('ajax.offer.delete');
            Route::get('edit/{offer_id}', 'OfferController@edit')->name('ajax.offer.edit');
            Route::post('update', 'OfferController@update')->name('ajax.offer.update');
        
        
        });

});
###############################  End Ajax Route #################################


//الدرس 70 الميدل وير 
###################  Start Authentication and guards ###########################

Route::group(['middleware' => 'CheckAge', 'namespace' => 'Auth'], function(){

    Route::get('adults', 'CustomAuthController@adult')->name('adult');

});

################### End Authentication and guards ###########################
