<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function card()
    {   
    	protected $fillable = ['body'];

    	return $this->belongsTo(Card::Class);
    }
}
