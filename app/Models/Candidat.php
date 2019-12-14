<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
<<<<<<< HEAD
    protected $guarded = [];
    public function admin()
    {
        return $this->belongsTo('App\Models\Administrateur');
    }
   /*  public function cv()
    {
        return $this->hasMany('App\Models\CV');
    } */
=======
    protected $guarded = [ ];
    public function admin()
    {
        return $this->belongsTo('App\Models\Administrateur','id_admin');
        //->select(['id', 'login']);
    }
    public function cv()
    {
        return $this->hasMany('App\Models\CV');
    }
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
    /* public function offre()
    {
        return $this->belongsToMany('App\Offre');
    } */
}
