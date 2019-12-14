<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $guarded = [];
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
  /*   public function candidats()
    {
        return $this->belongsToMany('App\Candidat');
    } */
<<<<<<< HEAD
=======
=======
    public function rec()
    {
        return $this->belongsTo('App\Models\Recruteur','id_recr');
        
    }
    
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
}
