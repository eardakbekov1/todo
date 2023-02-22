<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    protected $fillable = ['id', 'name'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
