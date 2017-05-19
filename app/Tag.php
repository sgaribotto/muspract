<?php

namespace Muspract;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   public $timestamps = false;
   public function exercises() {
       return $this->hasMany('Muspract\Exercise');
   } 
}
