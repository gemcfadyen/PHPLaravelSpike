<?php

  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Http\Requests;

  class PagesController extends Controller {
    public function home() {
      $people = ['Georgina', 'Catherine'];
      return view('welcome')->withPeople($people);
    }

    public function about() {
      return view('pages.about');
    }
  }
