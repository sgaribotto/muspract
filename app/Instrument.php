<?php

namespace Muspract;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    public $timestamps  = false;
    public function Exercise() {
        $this->hasMany('Muspract\Exercise');
    }
}
