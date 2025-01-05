<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'student_number',
        'phone_number',
        'field',
        'level',
        'is_active',
    ];
    public function registrations(){
        return $this->hasMany(Registration::class);
    }
}
