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

    $user = factory(\App\User::class)->create();

      $user->phone()->create([
          'phone' => '222-333-444'
      ]);


    $user->posts()->create([
        'title' =>'title here',
        'body' => 'body here',
    ]);

    $post = $user->posts->first();

    $post ->title = "new title";
    $post ->body = "new body";
    $post ->save();

//    $user->posts->first() ->title    ='new title';
//
//    $user->push();

    return $user->posts;

//    $user = \App\User::first();
//    $roles = \App\Role::all();
//
//    $user -> roles() ->attach($roles);
//
//    dd($roles);
});
