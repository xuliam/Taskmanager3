<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'completion', 'project_id'
    ];

    public function Project()
    {
        return $this->belongsTo('App\Project');
    }


}
