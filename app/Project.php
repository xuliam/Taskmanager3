<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'thumbnail'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
