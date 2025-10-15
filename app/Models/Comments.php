<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function tasks()
    {
        return $this->hasMany(Task::class, 'task_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
