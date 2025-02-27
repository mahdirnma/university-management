<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'personal_code',
        'teaching_field',
        'phone_number',
        'is_active',
    ];
    public function units()
    {
        return $this->hasMany(Unit::class);
    }

}
