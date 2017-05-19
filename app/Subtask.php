<?php

namespace Muspract;

use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
    public function exercise() {
        return $this->belongsTo('Muspract\Exercise');
    }
}
