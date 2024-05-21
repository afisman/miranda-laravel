<?php
function formatRoom($unformattedRoom) {
    return [
        'id' => $unformattedRoom['id'],
        'description' => $unformattedRoom['description'],
        'type' => $unformattedRoom['room_type'],
        'name' => $unformattedRoom['room_number'],
        'offer' => $unformattedRoom['offer'],
        'rate' => $unformattedRoom['rate'],
        'price' => calculateRate($unformattedRoom['rate'], $unformattedRoom['discount']),
        'amenities' => $unformattedRoom['amenities'],
        'photos' => $unformattedRoom['photos'][0]['url']

    ];
}

function populateArray($data, $arrayToPopulate) {
   foreach ($data as $roomToFormat) {
        $arrayToPopulate[] = formatRoom($roomToFormat);
    }
return $arrayToPopulate;
}

function calculateRate($price, $discount) {
        $priceInCents = $price -($price*$discount/100);
        return round($priceInCents/100);
    }

    function getAmenity($amenity) {
        $amenities = [
        'Air Conditioner' => asset('./assets/icon/airco.svg'),
        'Breakfast' => asset('./assets/icon/breakfast.svg'),
        'Cleaning' => asset('./assets/icon/cleaning.svg'),
        'Grocery' => asset('./assets/icon/grocery.svg'),
        'Shop Near' => asset('./assets/icon/shop.svg'),
        '24/7 Online Support' => asset('./assets/icon/support.svg'),
        'Smart Security' => asset('./assets/icon/security.svg'),
        'High Speed Wifi' => asset('./assets/icon/wifi.svg'),
        'Kitchen' => asset('./assets/icon/kitchen.svg'),
        'Shower' => asset('./assets/icon/shower.svg'),
        'Single Bed' => asset('./assets/icon/bed.svg'),
        'Expert Team' => asset('./assets/icon/expertTeam.svg'),
        'Towels' => asset('./assets/icon/towels.svg'),
        'Locker' => asset('./assets/icon/locker.svg'),
        'Terrace' => asset('./assets/icon/grocery.svg'),
        'Double Bed' => asset('./assets/icon/bed.svg'),
        'Room Service' => asset('./assets/icon/kitchen.svg'),
        'Parking' => asset('./assets/icon/shop.svg'),  
        'Mini Bar' => asset('./assets/icon/grocery.svg'),  
    ];

    return $amenities[$amenity['name']];
    }