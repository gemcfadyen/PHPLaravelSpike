<?php

  /*
   |--------------------------------------------------------------------------
   | Web Routes
   |--------------------------------------------------------------------------
   |
   | This file is where you may define all of the routes that are handled
   | by your application. Just tell Laravel the URIs it should respond
   | to using a Closure or controller method. Build something great!
   |
   */

  #Route::get('/', function () {
  #  $people = ['Georgina', 'Catherine'];
  #  return view('welcome')->withPeople($people);
  #  //return view('welcome')->with('people', $people);
  #  // return view('welcome', compact('people'));
  #  //These are alternative ways of passing parameters through.
  #});

  Route::get('names', function()
  {
    return array(
      1 => "John",
      2 => "Mary",
      3 => "Steven"
    );
  });

  #  Route::get('about', function() {
  #    return view('pages.about');
  #  });

  #  Using controllers for routes:
  Auth::routes();
  Route::get('/', 'PagesController@home');
  Route::get('/about', 'PagesController@about');
  Route::get('/cards', 'CardsController@index');
  Route::get('/cards/{id}', 'CardsController@show');
  Route::get('/home', 'HomeController@index');
  Route::get('/perf_test', 'PagesController@performance');
