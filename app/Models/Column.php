<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    public function board()
    {
        return $this->hasMany(Board::class, 'board_id');
    }
}
