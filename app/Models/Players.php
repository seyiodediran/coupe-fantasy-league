<?php

namespace App\Models;

use App\Models\User_Players;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Players extends Model
{

    public function userPlayers()
    {
        return $this->hasMany(User_Players::class);
    }
    use HasFactory;
}
