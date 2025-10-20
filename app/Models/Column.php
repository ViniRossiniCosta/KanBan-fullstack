<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Column extends Model
{
    protected $table = 'positions';
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
