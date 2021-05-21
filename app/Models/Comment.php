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

    public function user(){
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function issue(){
        return $this->hasOne(Issue::class, 'issue_id', 'id');
    }
}
