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

//   public static function formatRoom($unformattedRoom) {
//     return [
//             'id' => $unformattedRoom['id'],
//             'description' => $unformattedRoom['description'],
//             'type' => $unformattedRoom['room_type'],
//             'name' => $unformattedRoom['room_number'],
//             'offer' => $unformattedRoom['offer'],
//             'rate' => $unformattedRoom['rate'],
//             'price' => self::calculateRate($unformattedRoom['rate'], $unformattedRoom['discount']),
//             'amenities' => $unformattedRoom['amenities'],
//             'photos' => $unformattedRoom['photos'][1]['url']
//             ];
//   }

//   public static function formatRooms($data) {
//         $formattedRooms = [];
//         foreach ($data as $unformattedRoom) {
//             $formattedRooms[] =self::formatRoom($unformattedRoom);
//         }

//         return $formattedRooms;
//     }

    
    public function photos() : HasMany {
        return $this->hasMany(Photo::class, 'room_id');
    }
    
    public function amenities() : BelongsToMany {
        return $this ->belongsToMany(Amenity::class, 'room_amenity', );
    }
    
    public function bookings() : HasMany {
        return $this->hasMany(Booking::class, 'room');
    }

    public static function room($id) {
        return Room::with(['amenities', 'photoss'])->find($id);
    }
  
    public static function rooms() {
        $rooms = self::with(['photos', 'amenities'])->get();
        return $rooms;
    }

    public static function offers() {
        $rooms = self::with(['photos', 'amenities'])->where('offer', 'YES')->get();
        return $rooms;
    }

    public static function isAvailable($roomId, $checkIn, $checkOut) {
          $room =  self::with(['photos', 'amenities'])->whereHas('bookings', function ($query) use ($checkIn, $checkOut) {
            $query->where('check_in', '<', $checkOut)->where('check_out', '>', $checkIn)
                ->orWhere('check_in', '=<', $checkIn)->where('check_out', '<', $checkOut)
                ->orWhere('check_in', '>=', $checkIn)->where('check_in', '<', $checkOut)
                ->orWhere('check_out', '>', $checkIn)->where('check_out', '=<', $checkOut);
        })->find($roomId);
        return $room;
    }

    public static function checkAvailability( $checkIn, $checkOut) {
       
         $rooms = self::with(['photos', 'amenities'])->whereDoesntHave('bookings', function ($query) use ($checkIn, $check_out) {
            $query->where('check_in', '<', $checkOut)->where('check_out', '>', $checkIn)
                ->orWhere('check_in', '=<', $checkIn)->where('check_out', '<', $checkOut)
                ->orWhere('check_in', '>=', $checkIn)->where('check_in', '<', $checkOut)
                ->orWhere('check_out', '>', $checkIn)->where('check_out', '=<', $checkOut);
        })->get();

        return $rooms;
     }
}
