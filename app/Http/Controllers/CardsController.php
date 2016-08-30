<?php

  namespace App\Http\Controllers;

  use DB;
  use App\Card;
  use Illuminate\Http\Request;
  use App\Http\Requests;


  class CardsController extends Controller {

    public function index() {
      $allCards = Card::all(); //DB::table('cards')->get();
      return view('cards.index')->with('cards', $allCards);
    }

    public function show($id) {
      $card = Card::find($id);
      return view('cards.show')->with('card', $card);
    }
  }
