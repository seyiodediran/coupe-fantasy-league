<?php

namespace App\Models;

use App\Models\User;
use App\Models\Players;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User_Players extends Model
{

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function players()
    {
        return $this->hasOne(Players::class);
    }

    use HasFactory;
}
