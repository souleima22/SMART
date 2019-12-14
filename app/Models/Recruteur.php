<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
    protected $guarded = [];
   public function admin()
    {
        return $this->belongsTo('App\Models\Administrateur','id_admin');
        //->select(['id', 'login']);
    }
   /*  public function cv()
    {
        return $this->hasMany('App\Models\CV');
    } */
    /* public function offre()
    {
        return $this->belongsToMany('App\Offre');
    } */
}
