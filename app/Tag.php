<?php

namespace Muspract;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   public $timestamps = false;
   protected $fillable = ['name'];
   public function exercises() {
       return $this->belongsTo('Muspract\Exercise');
   } 
}
