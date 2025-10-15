<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
