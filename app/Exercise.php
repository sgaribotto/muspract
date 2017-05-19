<?php

namespace Muspract;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = ['name', 'objective', 
       'difficulties', 'description', 'practices_done'];
    public function tag() {
        return $this->belongsTo('Muspract\Tag');
    }
    public function instrument() {
        return $this->belongsTo('Muspract\Instrument');
    }
    public function status() {
        return $this->belongsTo('Muspract\Status'); 
    }
}
