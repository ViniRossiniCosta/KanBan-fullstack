<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Column;

class Board extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class)->using(UserBoard::class)->withPivot(['user_id', 'board_id']);
    }

    public function positions() {
        return $this->hasMany(Column::class);
    }
}
