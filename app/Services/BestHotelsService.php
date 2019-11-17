<?php

namespace App\Services;

// THIRD PARTY
use App\ThirdParty\BestHotels;

// TRANSFORMERS
use App\Transformers\BestHotelsTransformer;

class BestHotelsService implements HotelContract
{   
    public function getHotelsData($dateFrom, $dateTo, $city, $adultsCount)
    {
        // CREATE NEW OBJECT FROM BestHotels THIRD PARTY API.
        $bestHotels = new BestHotels;

        // GET HOTELS DATA FROM THIRD PARTY API.
        $hotels = $bestHotels->getHotelsData($dateFrom, $dateTo, $city, $adultsCount);
        
        // MAP RESPONSE THROUGH TRANSFORMER
        $hotels = fractal($hotels, new BestHotelsTransformer())->toArray();

        // RETURN MAPPED HOTELS DATA
        return $hotels['data'];
    }
}