<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $guarded = [];
    public function candidat()
    {
        return $this->belongsTo('App\Models\Candidat','id_candidat');
    }
}
