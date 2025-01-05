<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'unit_number',
        'type',
        'course_id',
        'lesson_id',
        'default_semester',
        'is_active',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
