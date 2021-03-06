<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    public function notes()
    {
        return $this -> hasMany(Note::class);
    }
    public function path()
    {
        return '/cards/'. $this -> id;
    }
    public function addNote(Note $note)
    {
        return $this->notes()->save($note);
    }
}
