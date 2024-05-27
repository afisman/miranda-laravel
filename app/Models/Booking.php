<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
    'name',
    'check_in',
    'check_out',
    'special_request',
    'room'
    ];

    public function room() : BelongsTo {
        return $this->belongsTo(Room::class, 'room');
    }

    public $timestamps = false;

}
