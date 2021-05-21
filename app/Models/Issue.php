<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $table = 'issues';
    protected $dates = [
      'created_at',
      'updated_at'
    ];
    protected $fillable = [
      'subject',
      'description',
      'status',
      'priority'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function reporter(){
        return $this->hasOne(User::class, 'reported_id', 'id');
    }

    public function assigner(){
        return $this->hasOne(User::class, 'assigned_id', 'id');
    }

    public function files(){
        return $this->morphMany(File::class, 'fileable');
    }
}
