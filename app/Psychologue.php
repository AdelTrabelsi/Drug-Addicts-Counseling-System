<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psychologue extends User
{
    //

    protected $primaryKey ="id_psychologues";   
    protected $guarded = [];
    public function discussions() 
    { 
        return $this->hasMany(Discussion::class); 
    }
    /*public function statuts() 
    { 
        return $this->hasMany(Statut::class); 
    }*/
    public function blogs() 
    { 
        return $this->hasMany(Blog::class); 
    }
    /*public function commentaire() 
    { 
        return $this->hasMany(Commentaire::class); 
    }*/
}
