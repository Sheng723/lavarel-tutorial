<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['body'];
    public function cards()
    {
        return $this -> belongsTo(Card::class);
    }

    public function users()
    {
        return $this -> belongsTo(User::class,'user_id','id');
    }
    
} 
