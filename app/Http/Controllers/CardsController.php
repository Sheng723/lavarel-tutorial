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
        //DB::enableQueryLog(); 
        //DB::table('users')->get();
        $card -> load('notes.users');
        //$card = Card::with('notes')->find(1);
        //dd(DB::getQueryLog());   
        //return $card->notes[0]->user;
        return view('cards.show',compact('card'));
        //$card = Card::with('notes')->find(1);
        //return $card;
    }
}


