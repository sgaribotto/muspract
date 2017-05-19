<?php

namespace Muspract;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = ['name', 'objective', 
       'difficulties', 'description', 'practices_done'];
    public function tag() {
        return $this->hasMany(Tag::class);
    }
    public function subtask() {
       return $this->hasMany(Subtask::class);
    }
    public function instrument() {
        return $this->belongsTo(Instrument::class);
    }
    public function status() {
        return $this->belongsTo(Status::class); 
    }
}
