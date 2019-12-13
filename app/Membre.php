<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    
  protected $guarded = [];

      public function discussions() 
    { 
        return $this->hasMany(Discussion::class); 
    }

    public function statuts() 
    { 
        return $this->hasMany(Statut::class); 
    }
    public function commentaire() 
    { 
        return $this->hasMany(Commentaire::class); 
    }
   /* protected $fillable = [
          
      'nom','prenom','adresse','email','mdp',
      'tel ','dateNais','sexe','photo',
     ];
     protected $primaryKey = 'idmembre';
     public $timestamps = false ;
     
   public function admin()
  {
      return $this->hasMany(Admin::class );
  }*/
}
