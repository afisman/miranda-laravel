<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $fillable = ['id', 
    'full_name',
    'contact',
    'email',
    'photo',
    'description',
    'start_date',
    'status',
    'position',
    'password'
];
}