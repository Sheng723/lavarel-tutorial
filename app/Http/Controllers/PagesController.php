<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $people = ['a','b', 'c'];
    //return view('main',compact('people'));
    //return View::make();
        return view('main',['people'=> $people]);
    }
    public function about(){
        return view('about');
    }
}
