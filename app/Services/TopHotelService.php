<?php

namespace App\Services;

// THIRD PARTY
use App\ThirdParty\TopHotel;

// TRANSFORMERS
use App\Transformers\TopHotelTransformer;

class TopHotelService implements HotelContract
{   
    public function getHotelsData($dateFrom, $dateTo, $city, $adultsCount)
    {
        // CREATE NEW OBJECT FROM TopHotel THIRD PARTY API
        $topHotel = new TopHotel;   

        // GET HOTELS DATA FROM THIRD PARTY API.
        $hotels = $topHotel->getHotelsData($dateFrom, $dateTo, $city, $adultsCount);

        // MAP RESPONSE THROUGH TRANSFORMER
        $hotels = fractal($hotels, new TopHotelTransformer())->toArray();

        // RETURN MAPPED HOTELS DATA
        return $hotels['data'];
    }
}
