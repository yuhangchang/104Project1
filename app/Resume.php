<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'name',
        'resume'
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
