<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;
    protected $table = 'amenity';
    protected $fillable = ['id', 'name'];

    public function getAmenity() {
         $amenities = [
             'Breakfast' => asset('./assets/icon/breakfast.svg'),
             'Shop Near' => asset('./assets/icon/shop.svg'),
             'Grocery' => asset('./assets/icon/grocery.svg'),
             'Cleaning' => asset('./assets/icon/cleaning.svg'),
             'Air Conditioner' => asset('./assets/icon/airco.svg'),
             'Smart Security' => asset('./assets/icon/security.svg'),
             'Kitchen' => asset('./assets/icon/kitchen.svg'),
             'Towels' => asset('./assets/icon/towels.svg'),
             'High Speed Wifi' => asset('./assets/icon/wifi.svg'),
             'Expert Team' => asset('./assets/icon/expertTeam.svg'),
             'Shower' => asset('./assets/icon/shower.svg'),
             'Locker' => asset('./assets/icon/locker.svg'),
             'Single Bed' => asset('./assets/icon/bed.svg'),
             '24/7 Online Support' => asset('./assets/icon/support.svg'),
    ];

    return $amenities[$this['name']];
    }
}
