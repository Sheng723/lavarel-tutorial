<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Card;
class NotesController extends Controller
{
    //
    public function store(Request $request, Card $card)
    {
        //return $request -> all();
        //$note = new Note;
        //$note-> body = $request -> body;
        //$card->notes()->save($note);
        //return \Redirect::to('new/uri') or redirect('new/uri');
        //return back();
        //another approach
        //$note = new Note(['body'=>$request->body]); then save// mass fillable
        //$card->notes()->save(new Note(['body' => $request -> body]));
        //reference create method
        //$card->notes()-> create([
        //    'body' => $request -> body
        //]);
        
        //$card->notes()->create($request->all()); //return array 
        $card ->addNote(
            new Note($request -> all())
        );
        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    public function update(Request $request, Note $note)
    {
       $note ->update($request->all());

       return back();  
    }

}
