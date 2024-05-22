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

  public static function calculateRate($price, $discount) {
        $priceInCents = $price -($price*$discount/100);
        return round($priceInCents/100);
  }

  public static function formatRoom($data) {
        $formattedRooms = [];
        foreach ($data as $unformattedRoom) {
            $formattedRooms[] =[
            'id' => $unformattedRoom['id'],
            'description' => $unformattedRoom['description'],
            'type' => $unformattedRoom['room_type'],
            'name' => $unformattedRoom['room_number'],
            'offer' => $unformattedRoom['offer'],
            'rate' => $unformattedRoom['rate'],
            'price' => self::calculateRate($unformattedRoom['rate'], $unformattedRoom['discount']),
            'amenities' => $unformattedRoom['amenities'],
            'photos' => $unformattedRoom['photos'][1]['url']
            ];
            echo  $unformattedRoom['photos'][0]['url'];
        }

        return $formattedRooms;
    }

    public function photos() : HasMany {
        return $this->hasMany(Photo::class, 'room_id');
    }

    public function amenities() : BelongsToMany {
        return $this ->belongsToMany(Amenity::class, 'room_amenity', );
    }

    public static function rooms() {
        $rooms = self::with(['photos', 'amenities'])->get();
        $data = self::formatRoom($rooms);
        return $data;
    }

    public static function offers() {
        $rooms = self::with(['photos', 'amenities'])->where('offer', 'YES')->get();
        $data = self::formatRoom($rooms);
        return $data;
    }
}
