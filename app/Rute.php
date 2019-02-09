<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    public function Transportasi() {
    	return $this->belongsTo('App\Transportasi', 'id_transportasi', 'id');
    }
}
