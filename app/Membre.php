<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    
  protected $guarded = [];
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
