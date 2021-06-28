<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostsController;

  




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

Route::get('/',[PostsController::class, 'index']);

//Route::get('/',[PublicController::class, 'index']);


Route::get('contactus',[ContactUSController::class, 'contactUS']);
 Route::post('contactus', ['as'=>'contactus.save','uses'=>'ContactUSController@contactUSPost']);




//  Route::prefix('user')->group(function(){
//    Route::get('welcome',[UsersController::class, 'dashboard']);

// });
Route::prefix('author')->group(function(){
   Route::get('dashboard',[AuthorController::class, 'dashboard']);
   Route::get('posts',[AuthorController::class, 'posts']);

});

 Route::prefix('admin')->group(function(){
    Route::get('dashboard',[AdminController::class, 'dashboard']);
   Route::get('users',[AdminController::class, 'users']);
   Route::get('posts',[AdminController::class, 'posts']);
   
  // Route::get('user/{userId}',[PublicController::class, 'userInfo']);

});




Route::middleware(['middleware'=>'preventBackHistory'])->group(function(){
   Auth::routes();
});



Route::resource('posts','PostsController');
//Route::resource('posts','AdminController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
