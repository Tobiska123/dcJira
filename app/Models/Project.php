<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
      'project_name',
      'completed_at'
    ];

    protected $dates = [
      'created_at',
      'updated_at',
      'completed_at'
    ];

    public function issues(){
        return $this->hasMany(Issue::class, 'project_id', 'id');
    }
}
