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


Route::namespace('Front')->group (function () {

    Route :: get('users1','UserController@showUserName');
    Route :: get('users1','UserController@showUserName');

});



Route::group(['prefix'=>'users','middleware' =>'auth'] ,function () {

    Route ::get('/',function (){

        return 'Work';
    });


  //  Route :: get('users','UserController@showUserName');

});


Route::get('/test1', function () {
    return 'welcome';
});


Route::get('/shownumber/{id}', function ($id) {
    return $id;
}) -> name('A');


Route::get('/showstring/{id?}', function () {
    return "work fine";
})->name('B');



Route ::get('check',function (){

    return 'middleware';
})->middleware('auth');


    Route::get('second', 'SecondController@showString')->middleware('auth');
    Route::get('second1', 'SecondController@showString1');

Route ::get('login',function (){

    return ' You Should Login First ';

})->name('login');



Route::resource('News','NewsController');

Route ::get('Index','Front\UserController@GetIndex');
Route ::get('/','Front\UserController@GetIndex');


Route::get('/landing', function () {
    return view ('landing');
});

Route::get('/loginAnimation', function () {
    return view ('loginanm');
});

Auth::routes(['verify' =>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


