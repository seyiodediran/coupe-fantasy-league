<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User_Budget extends Model
{

    public function user()
    {
        return $this->hasOne(User::class);
    }
    use HasFactory;
}
