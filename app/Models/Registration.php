<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable=[
        'semester_id',
        'student_id',
        'status',
        'gpa',
        'is_active',
    ];
    public function semester(){
        return $this->belongsTo(Semester::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function units()
    {
        return $this->belongsToMany(Unit::class);
    }
}
