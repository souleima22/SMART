<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $guarded = [];
<<<<<<< HEAD
   /*  public function candidat()
    {
        return $this->belongsTo('App\Models\Candidat');
    } */
=======
    public function candidat()
    {
        return $this->belongsTo('App\Models\Candidat','id_candidat');
    }
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
}
