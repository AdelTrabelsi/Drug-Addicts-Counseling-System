<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];
    //
    public function psychologue()
    { 
        return $this->belongsTo(Psychologue::class); 
    }
}
