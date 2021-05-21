<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $table='files';
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function fileable(){
        return $this->morphTo();
    }
}

