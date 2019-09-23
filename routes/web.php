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

use App\Category;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/', 'IndexController@index')->name('index');

// Posts(News)
Route::get('post', 'PostController@index')->name('post.index');
Route::get('post/{id}', 'PostController@show')->name('post.show');

Route::get('weddings', 'AlbumController@wedding')->name('wedding.album');
Route::get('weddings/{id}', 'AlbumController@wedding_images')->name('wedding.image');
Route::get('fashions', 'AlbumController@fashion')->name('fashion.album');
Route::get('fashions/{id}', 'AlbumController@fashion_images')->name('fashion.image');
Route::get('birthdays', 'AlbumController@birthday')->name('birthday.album');
Route::get('birthdays/{id}', 'AlbumController@birthday_images')->name('birthday.image');
Route::get('events', 'AlbumController@event')->name('event.album');
Route::get('events/{id}', 'AlbumController@event_images')->name('event.image');
Route::get('photobooths', 'AlbumController@photobooth')->name('photobooth.album');
Route::get('photobooths/{id}', 'AlbumController@photobooth_images')->name('photobooth.image');

Route::get('download/{id}', 'AlbumController@download')->name('album.download');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
