<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Card;

class CardsController extends Controller
{
    public function index(){
        
        //$cards = DB::table('cards')->get();
        //DB::table('cards')-> insert(['title' => 'My New Card2']);
        $cards = Card::all();
        return view('cards.index',compact('cards'));
    }
    /*
    public function show(Card $card){

        return view('cards.show',compact('card'));
    }*/
    public function show(Card $card){
        
        return $card->notes[0];
        //return view('cards.show',compact('card'));
    }
}


