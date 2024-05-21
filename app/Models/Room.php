<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;


class Room extends Model
{
    use HasFactory;
    protected $table = 'room';
    protected $fillable = ['id', 
  'room_type' ,
  'room_number' ,
  'description' ,
  'offer',
  'room_floor', 
  'rate',
  'discount',
  'status' ];

    public function photos() : HasMany {
        return $this->hasMany(Photo::class, 'room_id');
    }

    public function amenities() : BelongsToMany {
        return $this ->belongsToMany(Amenity::class, 'room_amenity', );
    }

    public static function swiper() {
        return self::with(['photos', 'amenities'])->get();
    }
}
