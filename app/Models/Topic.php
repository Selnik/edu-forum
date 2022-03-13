<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug'
    ];
    use HasFactory;
    public function subtopics()
    {
        return $this->hasMany(Subtopic::class);
    }
    public function threads()
    {
        return$this->hasMany(Thread::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
