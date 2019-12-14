<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    protected $guarded = [];
    
    
    public function candidat()
    {
        return $this->hasMany('App\Models\Candidat');
    }
    public function recruteur()
    {
        return $this->hasMany('App\Models\Recruteur');
    }
   
   
}
