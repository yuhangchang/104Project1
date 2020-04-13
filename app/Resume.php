<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'id',
        'name',
        'resume'
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function getTagListAttribute()
    {
        return $this->tags->pluck('id')->all();
    }
}
