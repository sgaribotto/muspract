<?php

namespace Muspract;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = ['name', 'objective', 
       'difficulties', 'description', 'practices_done'];
    public function tag() {
        return $this->hasMany('Muspract\Tag');
    }
    public function subtask() {
       return $this->hasMany('Muspract\Subtask');
    }
    public function instrument() {
        return $this->belongsTo('Muspract\Instrument');
    }
    public function status() {
        return $this->belongsTo('Muspract\Status'); 
    }
}
