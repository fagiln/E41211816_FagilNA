<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagementUserController;
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
    return view('welcome');
});
// Route::get('user', 'UserController@index');
Route::get('users/{name?}', function ($name = 'fagil') {
    return 'Halo ' . $name;
});
// Route::get('user/{name}', function ($name) {
//     return 'Halo ' . $name;
// })->where('name', '[A-Za-z]+');
// Route::get('user/{id}', function ($id) {
//     return 'Hai ' . $id;
// })->where('id', '[0-9]+');
// Route::get('user/{id?}/{name?}', function ($id = 1, $name= 'Fagil') {
//     return 'User '.$id.' Name: '.$name.'(Default)';
// })->where(['id'=> '[0-9]+','name'=> '[A-Za-z]+' ]);
// // acara 7
// Route::get('polije', function () {
//     $url = route('user');
//     return redirect()->route('user');
// })->where('id', '.*');
// Route::get('user/{name?}', function ($name = 'fagil') {
//     return 'Halo ' . $name;
// })->where('name', '.*')->name('user');

//acara 8
Route::middleware(['first', 'second'])->group(function () {
    Route::get('transaksi', function () {
        return 'ini page transaksi';});
    Route::get('bayar', function () {
        return 'ini page bayar'; }
    );

});
Route::
    namespace ('Admin')->group(function () {
        Route::get('profile', function () {
            return "ini page profile";
        }
        );
    });
Route::domain('test.laravel.mphstar.com')->group(function () {
    Route::get('test', function () {
        return "wkwkwwk";
    }
    );
});

Route::prefix('this')->group(function () {
    Route::get('profil', function () {
        return 'profil pengguna';
    }
    );
    Route::get('tentang', function () {
        return 'tentang pengguna';
    }
    );
    Route::get('index', function () {
        return 'index pengguna';
    }
    );
  
});
  // acara 10
  Route::get('user', 'ManagementUserController@index');
  Route::resource('user', 'ManagementUserController');
//   acara 11
Route::get('home', function(){
    return view('home');
});
  
