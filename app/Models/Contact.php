<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable = ['id',
    'image',
    'full_name',
    'email',
    'phone',
    'date',
    'message',
    'subject',
    'rating',
    'is_read'
];

    public $timestamps = false;
}
