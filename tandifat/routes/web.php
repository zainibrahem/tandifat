<?php
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

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
    return view('Home');
});
Route::get('/categories', function () {
    return view('categories');
});
// Route::get('/categories', 'HomeController@categories')->name('categories');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
    Route::get('/lang/{lang}',function($lang){
        if (in_array($lang, \Config::get('app.locales'))) {
            Session::put('locale', $lang);

        }
        return redirect()->back();
    });
});