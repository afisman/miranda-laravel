<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = ['id',
    'name',
    'order_date',
    'check_in',
    'check_out',
    'hour_check_in',
    'hour_check_out',
    'discount',
    'special_request',
    'status',
    'room'
    ];

    public function room() : BelongsTo {
        return $this->belongsTo(Room::class, 'room');
    }
}
