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
use App\User;

Route::get('/', function () {

    $users = User::get();

    return view('welcome', [ 'users' => $users ]);
});

Route::get('/profile/{id}', function ($id) {

    $user = App\User::find($id);

    $posts = $user->posts()
            ->with('category', 'image', 'tags')
            ->withCount('comments')->get();

    $videos = $user->posts()
            ->with('category', 'image', 'tags')
            ->withCount('comments')->get();

    //dd($user->name);
    return view('profile', [
        
        'user'   => $user,
        'posts'  => $posts,
        'videos' => $videos
        ]);

})->name('profile');

Route::get('/level/{id}', function ($id) {

    $level = App\Level::find($id);

    $posts = $level->posts()
            ->with('category', 'image', 'tags')
            ->withCount('comments')->get();

    $videos = $level->posts()
            ->with('category', 'image', 'tags')
            ->withCount('comments')->get();

    //dd($user->name);
    return view('level', [
        
        'level'  => $level,
        'posts'  => $posts,
        'videos' => $videos
        ]);

})->name('level');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
