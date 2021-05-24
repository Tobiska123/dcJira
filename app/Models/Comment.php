<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function issue()
    {
        return $this->belongsToMany(Issue::class);
    }
}
