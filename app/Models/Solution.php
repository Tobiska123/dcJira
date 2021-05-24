<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function issue()
    {
        return $this->hasOne(Issue::class);
    }
}
