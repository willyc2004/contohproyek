<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nickname',
        'grade_number',
        'phone',
        'sosmed',
        'email',
        'password',
        'gender',
        'birthdate',
        'nationality',
        'address',
        'city',
        'province',
        'country',
        'postcode',
        'photo',
        'note',
    ];

}
