<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $guarded = [];
    public function rec()
    {
        return $this->belongsTo('App\Models\Recruteur','id_recr');
        
    }
    
}
