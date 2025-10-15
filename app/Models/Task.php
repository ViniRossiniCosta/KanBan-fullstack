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

    protected $hidden = [
        ''
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->using(UserBoard::class)->withPivot(['user_id', 'task_id']);
    }
}
