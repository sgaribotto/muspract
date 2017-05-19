<?php

namespace Muspract;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = false;
    public function Exercises() {
        return $this->hasMany('Muspract\Exercise');
    } 
}
