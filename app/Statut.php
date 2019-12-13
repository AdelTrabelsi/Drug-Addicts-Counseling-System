<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    //
    
    protected $guarded = [];

        public function membre()
    { 
        return $this->belongsTo(Membre::class); 
    }

   /* public function psychologue()
    { 
        return $this->belongsTo(Psychologue::class); 
    }*/
}
