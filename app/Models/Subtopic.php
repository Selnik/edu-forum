<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    use HasFactory;
    public function threads()
    {
        return$this->hasMany(Thread::class);
    }
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

}
