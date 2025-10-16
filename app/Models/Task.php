<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'nome',
        'asing_user',
        'dt_start',
        'dt_end',
    ];

    public function attachs()
    {
        return $this->belongsTo(Attachs::class, 'attach_id');
    }

    public function comments()
    {
        return $this->belongsTo(Comments::class, 'comment_id');
    }

    public function steps()
    {
        return $this->belongsTo(Steps::class, 'step_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->using(UserBoard::class)->withPivot(['user_id', 'task_id']);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class)->using(UserTask::class)->withPivot(['user_id', 'task_id']);
    }
}
